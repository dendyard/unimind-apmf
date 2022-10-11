FROM php:7.4-apache-buster
COPY . /var/www/html/
RUN a2enmod rewrite
