FROM php:8.2-apache

# Установка системных зависимостей
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git \
    && docker-php-ext-install pdo_mysql zip

# Включаем mod_rewrite (нужно для Laravel)
RUN a2enmod rewrite

# Настройка DocumentRoot для Laravel (/public)
WORKDIR /var/www/html

# Копируем проект в контейнер
COPY . .

# Устанавливаем Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Устанавливаем зависимости Laravel
RUN composer install --no-dev --optimize-autoloader

# Генерим APP_KEY (если не задан)
RUN php artisan key:generate || true

# Настройка прав
RUN chmod -R 777 storage bootstrap/cache

# Указываем, что сервер слушает 80 порт
EXPOSE 80

# Запуск Apache
CMD ["apache2-foreground"]
