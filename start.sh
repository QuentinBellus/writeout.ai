#!/bin/bash
php artisan migrate --force
php artisan serve

#apache2ctl -D FOREGROUND
