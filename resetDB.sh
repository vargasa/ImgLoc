#!/bin/sh
php artisan migrate:fresh
php artisan db:seed --class=UserTableSeeder
php artisan db:seed --class=PostTableSeeder
php artisan db:seed --class=ImageTableSeeder
php artisan db:seed --class=ImageMapTableSeeder

