# docker/php/Dockerfile

FROM php:8.3.9-fpm

# Instalează dependențele necesare
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl

# Instalează Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Setează variabila de mediu pentru a permite rularea Composer ca super-utilizator
ENV COMPOSER_ALLOW_SUPERUSER 1

# Setează directorul de lucru
WORKDIR /var/www/backend

# Copiază fișierele de configurare
COPY backend /var/www/backend

# Instalează dependențele PHP, eliminând opțiunea depășită --no-suggest
RUN /usr/local/bin/composer install --prefer-dist --no-progress

# Expune portul
EXPOSE 9000
