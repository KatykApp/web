<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Acerca de Katyk

Katyk es una aplicación para el seguimiento de comunidades cristianas.

## Levantamiento de stack

````
cp .env.example .env
docker-compose up -d
````

Ingresar en el contenedor

````
docker exec -ti container_id bash
composer install
npm install && npm run build
php artisan migrate
````

Ejecutar solo la primera vez 
