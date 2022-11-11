FROM php:8-apache
RUN pecl install xdebug && docker-php-ext-enable xdebug 
RUN docker-php-ext-install pdo pdo_mysql