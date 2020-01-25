# install code dependencies
FROM composer:latest AS composer
COPY /src /app
RUN composer install

FROM php:7.4-fpm-alpine

# install dependencies
RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install -j$(nproc) pdo pdo_pgsql

COPY --chown=www-data:www-data --from=composer /app /src