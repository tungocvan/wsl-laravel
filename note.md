ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '9603597';
 php artisan db:seed --class=Modules\\Users\\seeders\\UserSeeder