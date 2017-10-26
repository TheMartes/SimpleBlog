# SimpleBlog

## Installation

### Preparing enviroment

#### Installing PHP and MariaDB / MySQL

##### Unix Systems

If you're on **Mac**, you can install PHP and MySQL via [Homebrew](https://brew.sh/)

Linux Distros can install PHP and MySQL with basically any package manager.

###### Windows

On Windows you can install PHP and MySQL by installing any of available AMP Stacks, such as [MAMP](https://www.mamp.info/en/), [WAMP](http://www.wampserver.com/en/), [XAMPP](https://www.apachefriends.org/index.html)  or [Laragon](https://laragon.org/)(suggested by us).

##### Composer and NodeJS

For installing this application, you'll need to install  `composer` following [this tutorial](https://getcomposer.org/doc/00-intro.md).

Also you'll need [NodeJS](https://nodejs.org/en/) for compiling JavaScript.

### Building Application

```
$ git clone https://gitlab.com/TheMartes/SimpleBlog
$ composer install
$ cp .env_example .env
$ php artisan key:generate
```

#### Then you'll need to compile SASS

If you don't have SASS already installed [follow this tutorial](https://sass-lang.com/install)

`sass --watch resources/assets/sass:public/css`

#### Additionaly you'll also need to build node_modules simply by:

Just in case that you want to use React or Vue with this application

`npm install`

Don't forget, that this blog is build on top of the laravel, [so you can find better information about using JS libraries in official documentation](https://laravel.com/docs/5.5/frontend#writing-javascript)

#### This repository belongs to MIT license
