FROM composer:2.4 as build
COPY . /app/
RUN composer install --prefer-dist --no-dev --optimize-autoloader --no-interaction --ignore-platform-req=ext-exif

FROM php:8.1-apache-buster as dev

ENV APP_ENV=dev
ENV APP_DEBUG=true
ENV COMPOSER_ALLOW_SUPERUSER=1

RUN apt-get update && apt-get install -y zip
RUN docker-php-ext-install pdo pdo_mysql

COPY . /var/www/html/
COPY --from=build /usr/bin/composer /usr/bin/composer
RUN composer install --prefer-dist --no-interaction --ignore-platform-req=ext-exif

COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf
#COPY .env.dev /var/www/html/.env

RUN php artisan config:cache
RUN php artisan route:cache
RUN chmod 777 -R /var/www/html/storage/
RUN chown -R www-data:www-data /var/www/
RUN a2enmod rewrite

#instalar SQL Serve
ENV ACCEPT_EULA=Y
RUN apt-get update && apt-get install -y gnupg2
RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - 
RUN curl https://packages.microsoft.com/config/debian/9/prod.list > /etc/apt/sources.list.d/mssql-relea`enter code here`se.list 
RUN apt-get update 
RUN ACCEPT_EULA=Y apt-get -y --no-install-recommends install msodbcsql17 unixodbc-dev 
RUN pecl install sqlsrv
RUN pecl install pdo_sqlsrv
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-enable sqlsrv pdo_sqlsrv pdo pdo_mysql