### ============================================================================================

## HOW TO USE

After Pull This Repo

1 . create .env file by copy from .env.example (and setting your database).

2 . install composer packege "composer install" .

3 . update the composer package "composer update"

4 . uncomment script on

    config/app.php
        SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class,
        Appzcoder\CrudGenerator\CrudGeneratorServiceProvider::class,

5 . migrate and seed the database "php artisan migrate --seed"

6 . uncomment script on

    app/Providers/AuthServiceProvider.php

        public function boot(GateContract $gate)
        {
            $this->registerPolicies($gate);

            /**
             * NOTE!!
             * First time migration will fails, because permissions table doesn't exists.
             * Disable / Comment first on first using this core.
             */
            //============== Disable This Code in First Migrate ==========================
            foreach($this->getPermissions() as $permission) {
                $gate->define($permission->name, function($user) use ($permission) {
                    return $user->hasRole($permission->roles);
                });
            }
            //=============== Enable Code After Migration ================================
        }

7 . publish the vendor "php artisan vendor:publish"

8 . create new key "php artisan key:generate" .

9 . change permission for bootstrap folder and storage folder

        sudo chmod 777 -R bootstrap/ storage/

10 . Done.. you ready to use this framework ^_^v

11 . run optimize "php artisan optimize"

### Remember this repo already have generate login/register module.  so you no need to "php artisan make:auth" again.  you just run "php artisan migrate --seed". and you ready to develop your project

## INCLUDED FUNCTION

1 . Manual ACL (Access Control List)

2 . Login & Register function

3 . CRUD GENERATOR

4 . Access Logging (get client ip & destination path)

5 . Flash message

6 . Watermark , Resize , Crop Image using intervention

7 . Debugbar

8 . Whoops Debug Log

9 . HTML Form

10 . DomPdf

11 . Local Asset for bootstrap , font awesome , jquery (css,js,fonts)

12 . Angularjs Lib and local asset

13 . example employee crud using angularjs

14 . Angularjs API for crud proccess

15 . QRCODE Generator

## INCLUDED PACKAGE

1 . "laravelcollective/html": "~5.0",

2 . "barryvdh/laravel-debugbar": "^2.0",

3 . "patricktalmadge/bootstrapper": "~5",

4 . "laracasts/flash": "~1.3",

5 . "intervention/image": "^2.3",

6 . "doctrine/dbal": "^2.5",

7 . "filp/whoops": "~1.0",

8 . "barryvdh/laravel-dompdf": "0.6.*",

9 . "illuminate/support": "^5.1"

10 . "appzcoder/crud-generator" : "*"

11 . "simplesoftwareio/simple-qrcode": "1.3.*"

## USING THE QRCODE

        <div class="visible-print text-center">
            {!! QrCode::size(100)->generate(Request::url()); !!}
            <p>Scan me to return to the original page.</p>
        </div>

### Basic Usage

        QrCode::generate('Make me into a QrCode!');
        {!! QrCode::generate('Make me into a QrCode!'); !!}

        size:
        QrCode::size(100);

        color:
        QrCode::color(255,0,255);

        background-color:
        QrCode::backgroundColor(255,255,0);

        margin:
        QrCode::margin(100);

        EMAIL METHOD:
        QrCode::email($to, $subject, $body);

        //Fills in the to address
        QrCode::email('foo@bar.com');

        //Fills in the to address, subject, and body of an e-mail.
        QrCode::email('foo@bar.com', 'This is the subject.', 'This is the message body.');

        //Fills in just the subject and body of an e-mail.
        QrCode::email(null, 'This is the subject.', 'This is the message body.');

        GEO METHODE
        QrCode::geo($latitude, $longitude);

        QrCode::geo(37.822214, -122.481769);

        PHONE METHOD:
        QrCode::phoneNumber($phoneNumber);

        QrCode::phoneNumber('555-555-5555');
        QrCode::phoneNumber('1-800-Laravel');

        SMS METHOD:
        QrCode::SMS($phoneNumber, $message);

        //Creates a text message with the number filled in.
        QrCode::SMS('555-555-5555');

        //Creates a text message with the number and message filled in.
        QrCode::SMS('555-555-5555', 'Body of the message');

## USING THE CRUD GENERATOR

Crud command:

        php artisan crud:generate Posts --fields="title:string, body:text"

For controller generator:

        php artisan crud:controller PostsController --crud-name=posts --model-name=Post --view-path="directory" --route-group=admin

For model generator:

        php artisan crud:model Post --fillable="['title', 'body']"

For migration generator:

        php artisan crud:migration posts --schema="title:string, body:text"

For view generator:

        php artisan crud:view posts --fields="title:string, body:text" --view-path="directory" --route-group=admin

By default, the generator will attempt to append the crud route to your routes.php file. If you don't want the route added, you can use the option --route=no.

After creating all resources, run migrate command. If necessary, include the route for your crud as well.

        php artisan migrate


### Custom Generator's Stub Template

You can customize the generator's stub files/templates to achieve your need.

Make sure you've published package's assets.

        php artisan vendor:publish

Turn on custom_template support on /config/crudgenerator.php

        'custom_template' => true,

From the directory /resources/crud-generator/ you can modify or customize the stub files.


### Options:

        php artisan crud:generate Posts --fields="title:string:required, body:text:required" --route=yes --pk=id --view-path="admin" --namespace=Admin --route-group=admin

--fields : Fields name for the form & model.

--route : Include Crud route to routes.php? yes or no.

--pk : The name of the primary key.

--view-path : The name of the view path.

--namespace : Namespace of the controller.

--route-group : Prefix of the route group.

Other commands (optional):


### Supported Field Types

These fields are supported for migration and view's form:

string

char

varchar

password

email

date

datetime

time

timestamp

text

mediumtext

longtext

json

jsonb

binary

number

integer

bigint

mediumint

tinyint

smallint

boolean

decimal

double

float

### ============================================================================================


## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)