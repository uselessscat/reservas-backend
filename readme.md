# Sistema de reservas (Backend-API)
## Instrucciones
### Para instalar dependencias

Ejecutar el docker de composer:

```
docker run --rm -ti -v $PWD/src:/app composer install 
```

### Para levantar el proyecto

Para ejecutar el ambiente de desarrollo:

```
docker-compose -f docker-compose-dev.yml up --build -d
```

### Para correr las pruebas

Las pruebas se pueden ejecutar dentro del contenedor de php con:

```
docker exec -t -w /src reservas_php_1 /src/vendor/bin/phpunit
```