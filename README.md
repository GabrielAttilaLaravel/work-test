# work-test #

### Install: ###

1. git clone  https://github.com/GabrielAttilaLaravel/work-test.git
2. Crear una db con el nombre de **work_test**
3. crear un archivo .env en la raiz y pegar lo siguiente:

    &nbsp;
    APP_NAME=Laravel
    
    &nbsp;
    APP_ENV=local
    
    &nbsp;
    APP_KEY=base64:FSwM5Ak2kmFHAfHW7gYF4T5yybReHPoe49o/YnRdBOg=
    
    &nbsp;
    APP_DEBUG=true
    
    &nbsp;
    
    &nbsp;
    LOG_CHANNEL=stack
    
    &nbsp;
    
    &nbsp;
    DB_CONNECTION=mysql
    
    &nbsp;
    DB_HOST=127.0.0.1
    
    &nbsp;
    DB_PORT=3306
    
    &nbsp;
    DB_DATABASE=work_test
    
    &nbsp;
    DB_USERNAME=
    
    &nbsp;
    DB_PASSWORD=
    
    &nbsp;
    
    &nbsp;
    BROADCAST_DRIVER=log
    
    &nbsp;
    CACHE_DRIVER=file
    
    &nbsp;
    SESSION_DRIVER=file
    
    &nbsp;
    SESSION_LIFETIME=120
    
    &nbsp;
    QUEUE_DRIVER=sync
    
    &nbsp;
    
    &nbsp;
    REDIS_HOST=127.0.0.1
    
    &nbsp;
    REDIS_PASSWORD=null
    
    &nbsp;
    REDIS_PORT=6379
    
    &nbsp;
    
    &nbsp;
    MAIL_DRIVER=smtp
    
    &nbsp;
    MAIL_HOST=smtp.mailtrap.io
    
    &nbsp;
    MAIL_PORT=2525
    
    &nbsp;
    MAIL_USERNAME=
    
    &nbsp;
    MAIL_PASSWORD=
    
    &nbsp;
    MAIL_ENCRYPTION=null
    
    &nbsp;
    
    &nbsp;
    PUSHER_APP_ID=
    
    &nbsp;
    PUSHER_APP_KEY=
    
    &nbsp;
    PUSHER_APP_SECRET=
    
    &nbsp;
    PUSHER_APP_CLUSTER=mt1
    
    &nbsp;
    
    &nbsp;
    MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    
    &nbsp;
    MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

5. Colocar en **DB_USERNAME** el user de mysql
6. Colcoar en **DB_PASSWORD** la clave de mysql
7. Ejecutar php artisan migrate:refresh --seed
8. Ejecutar ejecutar **composer install** para instalar dependencias
9. Ejecutar **php artisan serv***
10. Acceder a: http://127.0.0.1:8000/register

&nbsp;
---
### Codigo en: ###

1. Controller:

    &nbsp;
    namespace App\Http\Controllers\Admin\Users;
    
    &nbsp;
    namespace App\Http\Controllers\Admin\Users\Perfil;
    
    &nbsp;
    namespace App\Http\Controllers\Admin;
    
    &nbsp;
    namespace App\Http\Controllers\PanelAdmin;
  
    &nbsp;
    namespace App\Http\Controllers\Auth;
    
2. Modelos:

    &nbsp;
    namespace App\Models\Pais;
    
    &nbsp;
    namespace App\Models\Perfil;
    
    &nbsp;
    namespace App\Models\User;
    
3. Vistas:

    &nbsp;
    resources\views\pagina\panelAdmin\index
    
    &nbsp;
    resources\views\pagina\panelAdmin\users\index
        
    &nbsp;
    resources\views\pagina\panelAdmin\users\perfil\edit
            
    &nbsp;
    resources\views\pagina\panelAdmin\partials\footer
                
    &nbsp;
    resources\views\pagina\panelAdmin\partials\header
    
    &nbsp;
    resources\views\pagina\panelAdmin\partials\main-content
    
    &nbsp;
    resources\views\pagina\panelAdmin\partials\site-menu
    
    &nbsp;
    resources\views\layouts\panelAdmin\
    
    &nbsp;
    resources\views\layouts\partials\nav
    
    &nbsp;
    resources\views\auth\login
    
    &nbsp;
    resources\views\auth\register
    
    &nbsp;
    resources\views\auth\login
    
    &nbsp;
    resources\views\errors\403
    
    &nbsp;
    resources\views\errors\404
    
    &nbsp;
    resources\views\errors\419
    
    &nbsp;
    resources\views\errors\partials\errors