#!/bin/bash

# Install Composer dependencies
composer install --optimize-autoloader --no-dev


npm install
npm run build


mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs
mkdir -p bootstrap/cache


chmod -R 775 storage bootstrap/cache
