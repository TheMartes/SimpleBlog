# SimpleBlog

## Building Application

```
$ git clone https://gitlab.com/TheMartes/SimpleBlog
$ composer install
$ php artisan key:generate
$ cp .env_example .env
```

### Then you'll need to compile SASS

`sass --watch resources/assets/sass:public/css`

### Additionaly you'll also need to build node_modules simply by:

Just in case that you want to use React or Vue with this application

`npm install`

Don't forget, that this blog is build on top of the laravel, [so you can find better information about using JS libraries in official documentation](https://laravel.com/docs/5.5/frontend#writing-javascript)

### This repository belongs to MIT license
