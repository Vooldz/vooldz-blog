## VOOLDZ Blog

## Introduction

VOOLDZ Blog is a powerful blogging platform built with Laravel and Filament. It allows users to read and find blogs, filter blogs by tags, and view the most used tags at the top of the page. The platform also features an admin panel where administrators can manage posts, categories, blog titles, and other elements.

## Features
User-friendly interface for reading and finding blogs
Tag filtering for blogs
Display of most used tags
Admin panel for managing posts, categories, blog titles, and other elements
Installation
To install this project, follow these steps:

Clone the repository: `git clone https://github.com/Vooldz/vooldz-blog.git`
Navigate into the project directory: `cd vooldz-blog`
Install dependencies: `composer install`
Copy the .env.example file to .env: `cp .env.example .env`
Generate an app encryption key: `php artisan key:generate`
Run database migrations And Seed the database: `php artisan migrate --seed`
Install filament: `composer require filament/filament:"^3.1" -W`
Enter the file `livewire.php` then set this code in the bottom: `'asset_url' => 'vooldz-blog/public/livewire/livewire.js'` 
Enter the file `RouteServiceProvider` then set this code in the `boot` method: `Livewire::setUpdateRoute(function ($handle) {
            $url =  'vooldz-blog/public/livewire/update';
            return Route::post($url, $handle);
        });`
You must use Localhost Don't use php artisan serve.
You may face some delay you can enter the `.env` file and set the `APP_DEBUG` TO `false`
And remeber that this code will run localy that mean will use your device resources so it's normal to experience some delay

## Usage

Now, you can access the application in your browser at `localhost/vooldz-blog/public`

After installing the project, you can start using it. To log in to the admin panel, navigate to `localhost/vooldz-blog/public/admin` and enter using `vooldz@gmail.com` and the password `12345678`.




## Contributing
Contributions are welcome! Please read the contributing guidelines before getting started.

