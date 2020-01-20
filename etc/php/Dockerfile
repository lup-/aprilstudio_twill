FROM php:7.3-fpm

RUN apt-get update
RUN apt-get install -y build-essential libpng-dev libjpeg-dev libfreetype6-dev

RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd exif
RUN yes | pecl install xdebug
