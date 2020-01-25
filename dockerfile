# Install code dependencies
FROM composer:latest AS composer
COPY /src /app
RUN composer install

# --- The final image below ---
FROM php:7.4-fpm-alpine

# install dependencies
RUN apk update \
    && apk add postgresql-dev \
    && docker-php-ext-install -j$(nproc) pdo_pgsql

COPY --chown=www-data:www-data --from=composer /app /src