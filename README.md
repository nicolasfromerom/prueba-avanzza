
# Backend - Prueba de Desarrollador Backend

Este proyecto utiliza php 8.1


## Installation

- Clonar el proyecto

- Instalar dependecias
Dentro de la raíz del proyecto ejecutar:


```bash
  composer install
```
- Crear base de datos

- Generar archivo .env

Podemos duplicar el archivo .env.example, renombrarlo a .env e incluir los datos de conexión de la base de datos.
- Generar Key
La clave de aplicación es una cadena aleatoria
almacenada en la clave APP_KEY dentro del archivo .env,
Para generar la key ejecutar: 
```bash
  php artisan key:generate
```
- Ejecutar migraciones
Para generar las migraciones ejecutar:
```bash
  php artisan migrate
```
- Ejecutar seeders
Para generar los seeders ejecutar:
```bash
  php artisan db:seed
```

## Deployment

Para desplegar este proyecto ejecutar

```bash
  php artisan serve
```
- Para el token de autentificación
    email: example@example.com, password: 123456
```bash
  {{url}}/api/login
```
- Para listar y subir ficheros
```bash
  {{url}}/api/file
```
- Para subir ficheros de forma masiva
```bash
  {{url}}/api/file-massive
```
Ambos endpoints tienen limitación de 3 consultas por minuto.
