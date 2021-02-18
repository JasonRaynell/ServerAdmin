FROM php:7.4-apache

COPY newtrucorp-web.php /var/www/html/
RUN chown -R www-data:www-data /var/www/
RUN chmod o+r /var/www/
RUN docker-php-ext-install mysqli

EXPOSE 80 


