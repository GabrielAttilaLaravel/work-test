# work-test #

### Install: ###

1. git clone  https://github.com/GabrielAttilaLaravel/work-test.git
2. Crear una db con el nombre de **work_test**
3. Ejecutar php artisan migrate:refresh --seed
4. crear un archivo .env en la raiz y pegar lo siguiente:

    &nbsp;
    ###### APP_NAME=Laravel
    
    &nbsp;
    ###### APP_ENV=local
    
    ###### &nbsp;
    ###### APP_KEY=base64:FSwM5Ak2kmFHAfHW7gYF4T5yybReHPoe49o/YnRdBOg=
    
    &nbsp;
    ###### APP_DEBUG=true
    
    &nbsp;
    
    &nbsp;
    ###### LOG_CHANNEL=stack
    
    &nbsp;
    
    &nbsp;
    ###### DB_CONNECTION=mysql
    
    &nbsp;
    ###### DB_HOST=127.0.0.1
    
    &nbsp;
    ###### DB_PORT=3306
    
    &nbsp;
    ###### DB_DATABASE=work_test
    
    &nbsp;
    ###### DB_USERNAME=
    
    &nbsp;
    ###### DB_PASSWORD=
    
    &nbsp;
    
    &nbsp;
    ###### BROADCAST_DRIVER=log
    
    &nbsp;
    ###### CACHE_DRIVER=file
    
    &nbsp;
    ###### SESSION_DRIVER=file
    
    &nbsp;
    ###### SESSION_LIFETIME=120
    
    &nbsp;
    ###### QUEUE_DRIVER=sync
    
    &nbsp;
    
    &nbsp;
    ###### REDIS_HOST=127.0.0.1
    
    &nbsp;
    ###### REDIS_PASSWORD=null
    
    &nbsp;
    ###### REDIS_PORT=6379
    
    &nbsp;
    
    &nbsp;
    ###### MAIL_DRIVER=smtp
    
    &nbsp;
    ###### MAIL_HOST=smtp.mailtrap.io
    
    &nbsp;
    ###### MAIL_PORT=2525
    
    &nbsp;
    ###### MAIL_USERNAME=
    
    &nbsp;
    ###### MAIL_PASSWORD=
    
    &nbsp;
    ###### MAIL_ENCRYPTION=null
    
    &nbsp;
    
    &nbsp;
    ###### PUSHER_APP_ID=
    
    &nbsp;
    ###### PUSHER_APP_KEY=
    
    &nbsp;
    ###### PUSHER_APP_SECRET=
    
    &nbsp;
    ###### PUSHER_APP_CLUSTER=mt1
    
    &nbsp;
    
    &nbsp;
    ###### MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    
    &nbsp;
    ###### MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

5. Colocar en **DB_USERNAME** el user de mysql
6. Colcoar en **DB_PASSWORD** la clave de mysql
7. Ejecutar ejecutar **composer install** para instalar dependencias