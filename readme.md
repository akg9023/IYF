# IYF
## Reqirements
	
	php fileinfo
	php 5.5 or more
	Composer
	Mysql server

## Initialization of the Project

In Windows:
	Copy the files from IYF project folder to the folder you want it to run. Make a new file .env in that root  folder and copy the content of .env. example into .env file . Then in the command prompt go to the location where you have copied the files. Type the following commands: 
	
	composer install
	php artisan key:generate

Then open the .env file(in root directory of project) and write the configuration for the mysql server.

	DB_CONNECTION= mysql
	DB_HOST= localhost
	DB_PORT= 3306
	DB_DATABASE= <database name(eg. summer_iyf)>
	DB_USERNAME= <mysql username>
	DB_PASSWORD= <password>

Your Mail driver details

	MAIL_DRIVER=smtp
	MAIL_HOST= smtp.gmail.com
	MAIL_PORT= 587
	MAIL_USERNAME= <your email address>
	MAIL_PASSWORD= <your gmail password>
	MAIL_ENCRYPTION=tls
 
Twilio phone number
Purchase one at https://www.twilio.com/user/account/phone-numbers

	TWILIO_NUMBER=+15552737123

You need to create a TwiML app to use this project.
Create one at https://www.twilio.com/user/account/apps/add,
then use its "Sid" value here

	TWILIO_APPLICATION_SID=APXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

Twilio API credentials
Found at https://www.twilio.com/user/account/voice

	TWILIO_ACCOUNT_SID=ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
	TWILIO_AUTH_TOKEN=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

Remember to create the database with that name.
Then run the following command in the command prompt to create tables.

	php artisan migrate
				
Now to make that run, Type the below command to make the laravel server on.

	php artisan serve
			
Go to the link which appear to see it on the localhost.

Visit https://laravel.com/docs/5.2/ for more help if required.


###Happy Exploring.................

#Extras...
# Laravel PHP Framework
[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).
	
## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
