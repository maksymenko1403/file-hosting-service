A simple file hosting service written using Laravel 8. 
## Instalation
1. Clone this repository.
```
git clone https://github.com/maksymenko1403/file-hosting-service.git
```
2. Install the dependencies
```
composer install
```
3. Update your .env file.
4. Setup your APP_KEY 
```
php artisan key:generate
```
5. Database seeding uses files inside 'storage/app/upload/seeding' folder, so store files you wish to seed there, otherwise you won't be able to seed data.

## Features
1. Authentication (using Laravel Fortify)
2. Private files, which are visible and downloadable only for their owners (and admin)
3. Admin section where admin can see and manage all files
4. CRUD actions
5. Database seeding
