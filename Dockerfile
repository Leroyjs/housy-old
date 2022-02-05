FROM php:8.0.0rc1-fpm
# FROM node:14

# Install system dependencies
RUN apt-get update && apt-get install -y git

# Install PHP extensions
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
# RUN docker-php-ext-install zip
RUN docker-php-ext-install sockets
RUN docker-php-ext-install exif
# RUN docker-php-ext-install mbstring
# RUN docker-php-ext-install gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Node.js
# RUN apt-get install -y nodejs npm

# Set working directory
WORKDIR /var/www
