# Alpaca News

This is project for scraping news from the other portals.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

This project is written in PHP and Laravel is a framework. Also you will need MySQL DB.



### Installing and Running app


For start,go to your folder where you want to locate project and open CLI or Git Bash and run following git command:

```
git clone "https://github.com/ivke995/alpaca_news.git"
```

By default the selected repository will be main,so after that in git run this command:

```
git checkout master
```

After that run this command:

```
composer install
```

After successfully composer installation run following command.

```
composer update
```

Before you run project you must edit env variables inside .env file.

```
APP_URL=http://localhost:8000
DB_CONNECTION=mysql 
DB_HOST=127.0.0.1 
DB_PORT=3306 
DB_DATABASE=YOUR DB NAME 
DB_USERNAME=YOUR DB USERNAME 
DB_PASSWORD=YOUR DB PASSWORD 
```

Running migration and seeders To run migrations and seeders for you database, run following command.

```
php artisan migrate:refresh --seed 
```

After that in Git Bash run this commands one by one:

```
php artisan key:generate
```
```
php artisan storage:link
```
```
php artisan proxies:get
```

To run this project you can run following command:

```
php artisan serve
```

To collect all news you have command in git also to run:

```
php artisan articles:all
```


