FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    zip unzip curl sqlite3 libsqlite3-dev

RUN docker-php-ext-install pdo pdo_sqlite

COPY . /var/www/html

WORKDIR /var/www/html

RUN chmod -R 775 storage bootstrap/cache

RUN a2enmod rewrite

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/000-default.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/apache2.conf

CMD ["apache2-foreground"]
