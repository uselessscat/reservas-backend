# Sistema de reservas (Backend-API)
## Instrucciones
### Para instalar dependencias

Ejecutar el docker de composer:

```
docker run --rm -ti -v $PWD/src:/app composer install 
```

Para ejecutar el ambiente de desarrollo

```
docker-compose -f docker-compose-dev.yml up --build -d
```