Requirements:
 - PHP
 - Apache
 - MySQL
 - Composer
 - Node and NPM

Starting project:
 - Run 
```
composer install
```
 - Run 
```
npm install
```
 - Create database foor application
 - Copy .env.example and rename it to .env
 - In .env file edit database configuration
 - Run 
```
php artisan config:clear
```
 - Run 
```
php artisan key:generate
```
 - Run 
```
php artisan migrate:fresh --seed
```
 - Run 
```
php artisan storage:link
```
 - Run 
```
npm run dev
```
 - Run 
```
php artisan serve
```


User list (password for all users is 123456):
    - sys.admin@isa2020.ac.rs
    - pharmacy.admin@isa2020.ac.rs
    - pharmacist@isa2020.ac.rs
    - dermatologist@isa2020.ac.rs
    - supplier@isa2020.ac.rs
    - patient@isa2020.ac.rs
