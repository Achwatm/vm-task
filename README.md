
## docker-compose.yml
- webserver,
- app php:8.2 port 81
- db - mysql database
___
## Haw to run this application
- build and run docker containers
```
 docker-compose up -d --build
 ```
 - Install php dependencies
 ```
    composer install
 ```
 - install js dependencies
 ```
 npm install
 ```
 - build assets
 ```
 npm run build
 ```
- run fresh migrations and seeds
```
php artisan migrate:fresh --seed
```
___
<p align="center" style="font-size:24px"> CREATED VIEWS </p>

## Nav for web application

<p align="center"><img src="https://github.com/Achwatm/vm-task/blob/main/public/images/Zrzut%20ekranu%202024-06-3%20o%2018.42.45.png?raw=true"  alt="Nav"></p>

## Dashboard view
#### basic information about who's celebrating a birthday this week and users with latest purchases
<p align="center"><img src="https://github.com/Achwatm/vm-task/blob/main/public/images/Zrzut%20ekranu%202024-06-3%20o%2018.55.38.png?raw=true" = alt="Dashboard"></p>

## Users view
#### Paginated list of users. On this list is a column named "LAST PURCHASE ON" that contains the date of last purchase
<p align="center"><img src="https://github.com/Achwatm/vm-task/blob/main/public/images/Zrzut%20ekranu%202024-06-3%20o%2018.55.44.png?raw=true"  alt="Users"></p>

## Users by birthday view
#### Paginated list of users. Records are sorted by birthday, not by  birth date.
<p align="center"><img src="https://github.com/Achwatm/vm-task/blob/main/public/images/Zrzut%20ekranu%202024-06-3%20o%2018.55.49.png?raw=true"  alt="Users by birthday view"></p>

## This week birthday
#### Paginated list of users who have birthdays this week
<p align="center"><img src="https://github.com/Achwatm/vm-task/blob/main/public/images/Zrzut%20ekranu%202024-06-3%20o%2018.55.55.png?raw=true"  alt="This week birthday"></p>





