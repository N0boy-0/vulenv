#!/bin/bash
chmod 777 /var/log/nginx/access.log
rm -rf /var/www/html/index.nginx-debian.html
php-fpm -D && nginx -g 'daemon off;'
tail -F /dev/null
