## Primero
Para que la aplicación funcione se debe tener instalado [composer](http://librosweb.es/tutorial/como-instalar-composer-globalmente/).

## Segundo
Se debe descargar el proyecto, puede ser con git clone o descargar como .zip
y moverlo al servidor que usen (MAMP,WAMP etc..).


## Tercero
Se debe abrir la consola y moverse hasta el directorio del proyecto 
y ejecutar : 

		composer install


## Cuarto
- Crear la base de datos, se puede usar el propio mysql, en mi caso la llamé 'maps'

- Crear y configurar el archivo .env, en la raiz del proyecto aparecerá un archivo llamado '.env.example' se puede copiar el contenido y pegar en el archivo .env que han creado y modificar los parametros

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=maps 		//nombre de la base de datos
DB_USERNAME=root		//usuario 
DB_PASSWORD=root  		//contraseña, sino se tiene se puede dejar vacía


## Quinto
Desde la consola ejecutar el comando

		php artisan key:generate

esto sirve para que se genere una clave que pondrá en el archivo .env

APP_ENV=local
APP_DEBUG=true
APP_KEY=ClaveAleatoria    //normalmente se genera sola despues de ejercutar php artisan key:generate.

## Sexto
Abrir otra ventana de la consola y moverse al directorio del proyecto y ejecutar

		php artisan serve   

laravel nos crea un host y nos permitirá conectarnos al puerto 8000
'http://localhost:8000/' donde ya podemos visualizar la aplicación
pero antes se debe cargar las tablas y los registros a la base de datos, para ello hay que ejecutar los siguientes comandos desde la consola.

		php artisan migrate:install
		php artisan migrate
		php artisan db:seed

Con esto abremos conseguido cargar todos los datos a la base de datos, claro está que antes de hacer esto se debe iniciar Apache y Mysql.

Y listo..

