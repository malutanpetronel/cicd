# docker/php/Dockerfile

FROM php:8.3.9-fpm

# Instalează dependențele necesare
RUN apt-get update && apt-get install -y \
    git \
    unzip

# Instalează Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Setează directorul de lucru
WORKDIR /var/www/backend

# Copiază fișierele de configurare
COPY . /var/www/backend

# Instalează dependențele PHP
RUN composer install --prefer-dist --no-progress --no-suggest

# Expune portul
EXPOSE 9000
