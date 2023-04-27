# API GRAPHQL de Recetify

API Graphql en Laravel para ser utilizada por la aplicación web Recetify.

##  Requerimientos

- Tener instalado composer globalmente. 
- PHP >= 8.0
- MYSQL 8.0 

## Instalación
1. Clonar el repositorio.  

2. Instalar las dependencias de composer.
	~~~
	composer install
	~~~
3. Crear el archivo .env con la configuración apropiada.
4.  Ejecutar las migraciones de la base de datos. 
	~~~
	php artisan migrate
	~~~
5. Ejecutar el seeder principal de la base de datos. 
6. Crear el link simbólico para la carpeta public. 
7. Ejecutar en Laragon o con el comando: 
	~~~
	php artisan serve --host=0.0.0.0
	~~~
8. Ejecutar las pruebas de característica para comprobar que la instalación fue correcta.
	~~~
		php artisan test
	~~~
