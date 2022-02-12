FROM php:8.0.0rc1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y git

# SYSTEM SETUP
RUN apt-get update -y
RUN apt-get install -y --no-install-recommends apt-utils \
    && apt-get install -y sendmail \
    && apt-get install -y libpng-dev \
    && apt-get install -y libjpeg62-turbo-dev \
    && apt-get install -y libfreetype6-dev \
    && apt-get install -y libxml2-dev \
    && apt-get install -y libssl-dev \
    && apt-get install -y libzip-dev \
    && apt-get install -y libmcrypt-dev \
    && apt-get install -y memcached \
    && apt-get install -y libmemcached-dev \
    && apt-get install -y libicu-dev \
    && apt-get install -y zlib1g-dev \
    && apt-get install -y libonig-dev

# Install PHP extensions
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install zip
RUN docker-php-ext-install sockets
RUN docker-php-ext-install exif
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Node.js
# RUN apt-get install -y nodejs npm

RUN chown -R www-data:www-data /var/www

# Set working directory
WORKDIR /var/www
