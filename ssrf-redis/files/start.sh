#!/bin/bash

service ssh start
chmod 777 /var/log/nginx/access.log
rm -rf /var/www/html/index.nginx-debian.html
redis-server /etc/redis/redis.conf
php-fpm -D && nginx -g 'daemon off;'
tail -F /dev/null
