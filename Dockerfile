# Utiliser une image PHP avec les extensions nécessaires
FROM php:8.2-fpm

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd \
    && docker-php-ext-install pdo pdo_mysql gd

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le dossier de travail
WORKDIR /var/www

# Copier les fichiers Laravel
COPY . .

# Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Donner les permissions aux fichiers Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Exposer le port
EXPOSE 9000

# Démarrer PHP-FPM
CMD ["php-fpm"]
