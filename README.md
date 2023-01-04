# swa-backend
1)
composer install

Create file .env Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration

php artisan key:generate

php artisan migrate

2)
php artisan permission:create-role user // Creating role with name "user"
php artisan tinker
$user = User::where("id", "2")->first();
$user->assignRole('admin');

3) 
yarn dev

P.S.
Used links: https://spatie.be/ - package for user rules, permissons ext.

https://adminlte.io/ - free html-template for admin panel.

https://select2.org/




https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Installation