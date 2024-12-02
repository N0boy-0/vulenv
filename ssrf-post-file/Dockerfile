FROM php:7.4.28-fpm-buster

ENV LANG C.UTF-8
ENV FLAG flag{this_is_flag}

RUN sed -i 's/deb.debian.org/mirrors.aliyun.com/g' /etc/apt/sources.list && \
        sed -i '/security/d' /etc/apt/sources.list && \
    apt-get update && \
    apt-get install -y nginx iputils-ping  vim
ENV DEBIAN_FRONTEND noninteractive

COPY /src/ /var/www/html
COPY /files/default.conf /etc/nginx/sites-available/default
COPY /files/start.sh /
   # 清理
RUN     rm -rf /var/lib/apt/lists/*

RUN     chmod -R 755 /var/www/html && \
        chmod +x /start.sh
        
CMD ["/start.sh"] 

EXPOSE 80
