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
docker exec -t <PHP_CONTAINER_NAME> /src/vendor/bin/phpunit
```

### Comandos de Artisan

Los comandos de artisan se corren con:

```
docker exec -t <PHP_CONTAINER_NAME> php artisan <COMMAND>
```
### Xdebbuger en Visual studio code 

1.- Instalar package PHP Debug 
2.- En el icono de debugger luego darle play, escoger PHP y dejar el launch.json de la siguiente forma 

```
{
    // Use IntelliSense to learn about possible attributes.
    // Hover to view descriptions of existing attributes.
    // For more information, visit: https://go.microsoft.com/fwlink/?linkid=830387
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for XDebug",
            "type": "php",
            "request": "launch",
            "port": 9001,
            "pathMappings": {
                "/src":"${workspaceFolder}/src"
            },
            "log":true
        },
        {
            "name": "Launch currently open script",
            "type": "php",
            "request": "launch",
            "program": "${file}",
            "cwd": "${fileDirname}",
            "port": 9001
        }
    ]
}
```