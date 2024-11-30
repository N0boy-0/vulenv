FROM php:7.4.28-fpm-buster

ENV LANG C.UTF-8


RUN sed -i 's/deb.debian.org/mirrors.aliyun.com/g' /etc/apt/sources.list && \
        sed -i '/security/d' /etc/apt/sources.list && \
    apt-get update && \
    apt-get install -y nginx openssh-server iputils-ping  vim
ENV DEBIAN_FRONTEND noninteractive

COPY /src/ /var/www/html
COPY /files/default.conf /etc/nginx/sites-available/default
COPY /files/flag.sh /
COPY /files/start.sh /



RUN mkdir /var/run/sshd && \
    useradd -m -s /bin/bash ctf && \
    echo 'ctf:1qazcde3!@#' | chpasswd && \
    chown -R ctf:ctf /var/www/html && \
    # 允许 ctf 用户通过 SSH 登录
    echo 'AllowUsers ctf' >> /etc/ssh/sshd_config && \
    # 启用密码认证
    sed -i 's/#PasswordAuthentication yes/PasswordAuthentication yes/' /etc/ssh/sshd_config && \
    # 清理
    rm -rf /var/lib/apt/lists/*

RUN chown -R ctf:ctf /var/www/html/ && \
        chmod -R 755 /var/www/html && \
        chmod +x /start.sh && \
        chmod +x /flag.sh
        
CMD ["/start.sh"] 

EXPOSE 80
EXPOSE 22