#!/bin/bash
php artisan config:clear
php artisan key:generate
php artisan migrate --force
php artisan serve --host=0.0.0.0

#apache2ctl -D FOREGROUND
