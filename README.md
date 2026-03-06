# Instalación de Contenedor en producción

1. Copie el archivo .env.example a .env

```
    cp .env.example .env
```

2. Rellene los datos del .env

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=root
DB_PASSWORD=

```

3. Ejecute Contenedor de Laravel

```
    docker-compose up -d
```

4. Ejecute Comandos Adicionales del Contenedor de Laravel

```
    docker exec bigpack composer install --no-dev --optimize-autoloader

    docker exec bigpack php artisan key:generate

    docker exec bigpack php artisan storage:link

    docker exec bigpack chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

    docker exec bigpack chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

    docker exec bigpack php artisan optimize

    docker exec bigpack npm install

    docker exec bigpack npm run build

```
