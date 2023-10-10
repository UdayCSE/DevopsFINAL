FROM php:8.0-apache

WORKDIR /var/www/html/FINAL

COPY . /var/www/html/FINAL/

EXPOSE 80

CMD ["apache-foreground"]

RUN chown -R www-data:www-data /var/www/html

