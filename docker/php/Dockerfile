FROM php:7.4-apache

ARG WWWGROUP

RUN apt-get update \
    && apt-get install -y \
        libmcrypt-dev \
        mariadb-client \
        libmagickwand-dev --no-install-recommends \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libxml2-dev \
        zlib1g-dev \
        libicu-dev g++ \
        libxslt-dev \
        libzip-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && pecl install mcrypt-1.0.3 \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-enable mcrypt \
    && docker-php-ext-install soap \
        bcmath \
        xsl \
        pdo_mysql \
        zip \
        sockets

RUN docker-php-ext-configure gd --with-jpeg=DIR --with-freetype=/usr/lib64/ \
    && docker-php-ext-install -j$(nproc) gd

RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl

# COPY ./xdebug/php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN a2enmod rewrite

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN chmod 777 /var/www

RUN chmod 777 /var/www/html

RUN groupadd --force -g $WWWGROUP sail
RUN useradd -ms /bin/bash --no-user-group -g $WWWGROUP -u 1337 sail

USER sail
