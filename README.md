# Project Alpha - Gustavo
This is a Laravel project developed for study reasons

My main focus on this project is to run an MVC application and an API REST.

## Stack
**Back-end:** `PHP 8.1.2 (cli) (built: Jan 19 2022 10:18:23) (ZTS Visual C++ 2019 x64)`

**FramekWork:** `Laravel Framework 9.5.1`

**Database:** `10.4.22-MariaDB (local)`

## Access

You can access a deploy of this project on: [Project-Alpha](http://project-gustavo.herokuapp.com/)

## Locally run

First of all, if you don't have php and MySQL installed, do this:

Access and install XAMPP, to install php, MySQL and Apache dependencies. 
In the instalation it's highly recommended that you set to include the environment variables automatically.

- [Xampp](https://www.apachefriends.org/index.html)

After this, open up Xampp Control Pannel and start Apache and MySql modules.



If you forgot to add the variables into your environment variables, let's manually do it.
Search for Environment variables in your Operation System and enter it.
- Click on "Environment variables...";
- Click on the row that has the variable value as "path" and click "Edit...";
- Click on the button "New" and then "Search...";
- Find where you installed XAMPP and access this directory: "\xampp\mysql\bin";

Let's do this for PHP too, so:
- Click on the button "New" and then "Search...";
- Find where you installed XAMPP and access this directory: "\xampp\php";

- Click the "OK" button

Go to `"xampp\php"` and edit the file `"php.ini"`, find the text `"extension=pdo_mysql"` and uncomment it.
Below that, insert:

```bash
  extension= php_fileinfo.dll
```

Okay, now that we set the environment variables up, we need to create the database, so open up a terminal and type:

```bash
  mysql -u root -e "create database project_alpha"; 
```

Now that we created our database, let's proceed

Install composer at

```bash
  https://getcomposer.org/download/php
```

If you don't have GIT installed, please access the link below and follow the tutorial

```bash
  https://git-scm.com/book/en/v2/Getting-Started-Installing-Git
```

After this, we can clone the project and download its dependencies.
But first you need to open your command prompt, after this, go to your folder directory that you want to install the project and type this:

```bash
  git clone https://github.com/GustavoRosas/project_alpha.git
```

Enter the project directory

```bash
  cd project_alpha
```

Install its dependencies, typing this on the terminal:

```bash
  composer update
```
```bash
  composer install
```
```bash
  npm install
```
```bash
  npm run dev
```
```bash
  copy .env.example .env (Windows)
  or
  cp .env.example .env (Unix)
```
```bash
  php artisan key:generate
```

Go to your .env file in the root directory of the project, edit it and modify this fields:

```bash
  "APP_URL=http://localhost"  ====> "APP_URL=http://localhost:8000"
```
```bash
  "DB_DATABASE=laravel" ====> "DB_DATABASE=project_alpha"
```
```bash
  "DB_PASSWORD="  ====> "DB_PASSWORD=""
```

Migrate your database

```bash
  php artisan migrate
```

Start the server

```bash
  php artisan serve
```

Done! From now once you can access the link: `http://localhost:8000/`

## Future developments

As soon as possible, every data on the project will be reacheable by an API created in this same project.

## Author

- [@Gustavo Rosas](https://www.github.com/GustavoRosas)
