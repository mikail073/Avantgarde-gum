FROM php:8.2-apache

# Установка системных зависимостей
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git \
    && docker-php-ext-install pdo_mysql zip

# Включаем mod_rewrite
RUN a2enmod rewrite

# Настройка DocumentRoot на /public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf

RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Рабочая директория
WORKDIR /var/www/html

# Копируем проект
COPY . .

# Устанавливаем Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Устанавливаем зависимости Laravel
RUN composer install --no-dev --optimize-autoloader

# Генерируем ключ (если нет)
RUN php artisan key:generate || true

# Права
RUN chmod -R 777 storage bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
