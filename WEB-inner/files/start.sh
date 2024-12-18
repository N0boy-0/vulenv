#!/bin/bash

# 有自定义 FLAG 脚本则需要执行它，这里是从环境变量获取 FLAG，则需要 source 来执行这个脚本从而改写环境变量，避免费预期解
if [[ -f /flag.sh ]]; then
	source /flag.sh
	rm -f /flag.sh
fi
service ssh start
chmod 777 /var/log/nginx/access.log
rm -rf /var/www/html/index.nginx-debian.html
php-fpm -D && nginx -g 'daemon off;'
tail -F /dev/null