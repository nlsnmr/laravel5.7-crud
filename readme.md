# Laravel 5.7 CRUD

### A basic app with Laravel that manage Projects and Tasks
Using Laravel framework and MySQL database, the app allow's to manage projects and project tasks, displying them on the frontend after user logged.  
By default this app can send email (set configuration on `.env` file) after each project creation.  

__Laravel version__: 5.7  
__CSS framework__: Bluma  
__Database__: Mysql  


This project/app have the debugger `Laravel Telescope` available. Check [Laravel Telescope (GitHub)](https://github.com/laravel/telescope "Telescope (GitHub)") for extra info about `Laravel Telescope`.

### __Laravel Telescope:__
![Preview](https://monosnap.com/image/czTqOEboYWKrFhXlbVLgsbcODAgCJ5.png)

### __Projects list page:__
![Preview](https://monosnap.com/image/OwCVNDLjp2HzDTLQ41pXi24X5fgPOp.png)

### __Project tasks page:__
![Preview](https://monosnap.com/image/Ow7VHcjbYaWvTyqR15dBQrVdjRmyq6.png)

## Running this app Locally

First, clone the repository to your local machine:

```bash
git clone https://github.com/nlsnmr/laravel5.7-crud.git
```

Install dependencies:
```bash
composer install
```

Setup the local configurations:
> By default this app can send email after each project creation.  
> On the `.env` file is set with `MAIL_DRIVER=log`, when set with smtp, username, etc it should send normally the email
```bash
cp .env.example .env
```

After database creation:
```bash
php artisan migrate
```

Generate key:
```bash
php artisan key:generate
````

Finally, run the development server:

```bash
php artisan serve
```

The app will be available at: **127.0.0.1:8000**  
The [Laravel Telescope (GitHub)](https://github.com/laravel/telescope "Telescope (GitHub)") will be available at: **127.0.0.1:8000/telescope**

