# Introduction

This application is build with the following stacks : PHP ^8.2 + Laravel ^11.8.0. The codes are linted by ./vendor/bin/pint.
I've made use of https://scribe.knuckles.wtf/ to document the APIs. You can either test through the postman collection in the root directory docs.postman_collection.json or access the documentation at /docs after generating with the following command :

```
php artisan scribe:generate
```

You may also download the automatically generated api docs from /docs.postman or /docs.openapi

# Solution Approach

Here's a database diagram of the application :
![Screenshot 2024-05-28 at 10 29 35 PM](https://github.com/kksmiles/inisev-code-test/assets/39384662/98e7e337-ca1a-4b4d-8940-bccc74a79c6b)



api.php - Contains the routes for the application

- /api/posts - RESTful API for posts
- /api/websites - RESTful API for websites
- /api/websites/{website}/subscribe - API for subscribing to a website
- /api/websites/{website}/unsubscribe - API for unsubscribing from a website

- app/observers/PostObserver.php - Observer for the Post model to create notification records to be sent to subscribers
- app/Console/Commands/SendNewPostNotificationEmailsCommand.php - Command to send email notifications to subscribers

The below command is not needed since PostObserver is already creating the notification records:
- app/Console/Commands/PrepareNewPostNotificationEmailsCommand.php - Command to prepare email notifications to be sent to subscribers which are missed during the given time.

MUST:-
- ✅ Use PHP 7._ or 8._
- ✅ Write migrations for the required tables.
- ✅ Endpoint to create a "post" for a "particular website".
- ✅ Endpoint to make a user subscribe to a "particular website" with all the tiny validations included in it.
- ✅ Use of command to send email to the subscribers (command must check all websites and send all new posts to subscribers which haven't been sent yet).
- ✅ Use of queues to schedule sending in background.
- ✅ No duplicate stories should get sent to subscribers.
- ✅ Deploy the code on a public github repository.

OPTIONAL:-
- ✅ Seeded data of the websites.
- ✅ Open API documentation (or) Postman collection demonstrating available APIs & their usage.
- ☑️ Use of contracts & services.
- ☑️ Use of caching wherever applicable.
- ✅ Use of events/listeners.

# How to run

## Method 1 Using Laravel Sail with Docker

Make sure you have composer on your machine and your docker is running when using this method.

Step 1 - Run the following command to install the dependencies

```
composer install
```

Step 2 - Copy the .env.example file to .env

```
cp .env.example .env
```

Step 3 - Generate APP_KEY

```
php artisan key:generate
```

Step 4 - Run the following command to start the docker container

```
./vendor/bin/sail up -d
```

Step 5 - Once the container is up, Run the following command to run the migrations

```
./vendor/bin/sail artisan migrate:fresh --seed
```

Step 6 - You can now access the application on env('APP_URL') : http://localhost

## Method 2 Installing Laravel on your local machine

You'll need to have PHP 8.2 and composer installed on your local machine to use this method.

Step 1 - Run the following command to install the dependencies

```
composer install
```

Step 2 - Copy the .env.example file to .env

```
cp .env.example .env
```

Step 3 - Generate APP_KEY

```
php artisan key:generate
```

Step 4 - Run the following command to run the migrations

```
php artisan migrate:fresh --seed
```

Step 5 - Run the following command to start the application

```
php artisan serve
```

Step 6 - You can now access the application on 127.0.0.1:8000
