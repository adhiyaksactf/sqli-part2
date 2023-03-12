FROM php:8.2-apache-bullseye
RUN docker-php-ext-install mysqli
ADD ./app /var/www/html