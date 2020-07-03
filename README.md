##Acerca de

Si no se tiene la versión de PHP, mysql o el sistema operativo requerido, se puede correr por medio de una imágen de docker o por medio de una máquina virtual linux, en mi caso tengo windows 10 home por lo que no podía utilizar docker, implementé una partición con debian para trabajarla.


##Requisitos para la instalación

El proyecto está creado en laravel 7.18.0, usando Mysql 5.7.30 para base de datos y php versión 7.2.24.



###Debemos de tener instalado

* Composer
	- Si no tenemos composer podemos ver la instalación desde su documentación oficial https://getcomposer.org/doc/00-intro.md

* NPM
	- Si no tenemos NPM instalado podemos ver la instalación desde su documentación oficial https://www.npmjs.com/get-npm


##Al clonar el repositorio debemos de configurar lo siguiente

	* Base de datos
		Nombre: Laravel
		Usuario: root
		Password:


	**Si llegara a cambiar el usuario o contraseña para sus configuraciones locales, modificar el archivo "/.env" tanto el "DB_USERNAME" y / o el "DB_PASSWORD"


##Luego de configurar, ejecutar los siguientes comandos
	
	* composer install

	* npm install

	* php artisan migrate