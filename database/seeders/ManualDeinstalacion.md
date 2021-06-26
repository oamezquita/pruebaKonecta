### Instalación 🔧

_Primero se debe clonar el repositorio_

_Clone el repositorio_

```
git clone https://github.com/oamezquita/pruebaKonecta
```

_Instale todas las dependencias del Proyecto con_

```
composer install
```

_Como el proyecto tiene dependencias en JS instalelas con_

```
npm install
```

_Copie el Archivo .env.example en un archivo nuevo .env con_

```
cp .env.example .env
```
_Configure la base de datos y las demas variables de entorno en el archivo .env_

_Genere una nueva Key para el protecto con_

```
php artisan key:generate
```

_Corra las migraciones del proyecto con_

```
php artisan migrate
```

_Corra los seeder del proyecto con_

```
php artisan db:seed --class=PermissionTableSeeder
php artisan db:seed --class=CreateAdminUserSeeder
php artisan db:seed --class=CreateSalesUserSeeder
```
_Corra el proyecto con_

```
php artisan serve
```

_Si todo está correcto puede acceder al proyecto en la dirección http://localhost:8000_ con el Usuario admin@gmail.com - 123456


