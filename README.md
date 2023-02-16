# Laravel 8 CRUD Operation Example



## Installation

1-Clone the repository
```
https://github.com/aymensmida/Laravel-Crud-App.git
```

2- cd into the folder with this command:
```
cd Laravel-Crud-App
```

3- composer install
```
composer install
```

4-Then create a environment file using this command:
```
cp .env.example .env
```

5- generate key
```
php artisan key:generate
``` 

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

6-Then create a database named `library` and then do a database migration using this command:
```
php artisan migrate
```

## Run server

7-Run server using this command:
```
php artisan serve
```

Then go to `http://localhost:8000/books` from your browser and see the app.

## Technologies Used

- PHP Laravel Framework
- Bootstrap v4.6
