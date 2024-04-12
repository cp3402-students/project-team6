FROM php:7.4-apache
COPY . /var/www/html/
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN chmod -R 755 /var/www/html/
EXPOSE 80