<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Ejecutar

    composer install
    
    npm install
    
    cambiar el .env.example -> .env
    
    php artisan key:generate

    php artisan migrate 

    npm run dev
    
    php artisan serve

    rama prueba



    

    Si se desea borrar una migracion ejecute:

    php artisan migrate:refresh 
    php artisan migrate:fresh

    Reiniciar la configuracion de laravel, cuando no actualiza los cambios en rutas o url

    php artisan route:cache

    php artisan config:cache