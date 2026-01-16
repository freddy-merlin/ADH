
# ---- Base PHP + Apache ----
FROM php:8.2-apache

# Répertoire de travail
WORKDIR /var/www/html

# Dépendances système + extensions PHP (GD/ZIP/OPcache) + modules Apache
RUN apt-get update && apt-get install -y \
    git curl zip unzip \
    libpng-dev libjpeg-dev libfreetype6-dev libzip-dev libxml2-dev libsqlite3-dev libonig-dev \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip opcache pdo_sqlite \
 && a2enmod rewrite headers \
 && rm -rf /var/lib/apt/lists/*

# Ecouter sur 8080
RUN sed -i 's/^Listen .*/Listen 8080/' /etc/apache2/ports.conf

# VHost Laravel
COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default.conf

# Composer (binaire)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1

# Copie minimale pour optimiser le cache Composer
COPY composer.json composer.lock ./
RUN composer install --no-interaction --prefer-dist --no-dev --optimize-autoloader --no-scripts

# Copie du reste de l'app (sans vendor grâce au .dockerignore)
COPY . .


# (Optionnel) Terminer les scripts qui étaient bloqués par --no-scripts
# - On force juste un dump-autoload + package:discover (ne bloque pas si échec)
RUN composer dump-autoload -o \
 && php artisan package:discover --ansi || true


# Permissions pour les répertoires Laravel
RUN chown -R www-data:www-data storage bootstrap/cache \
 && chmod -R 775 storage bootstrap/cache

# OPcache (réglages prod simples)
RUN printf "%s\n" \
  "opcache.enable=1" \
  "opcache.enable_cli=1" \
  "opcache.validate_timestamps=0" \
  "opcache.jit=1255" \
  "opcache.jit_buffer_size=128M" \
  "opcache.preload_user=www-data" \
  > /usr/local/etc/php/conf.d/opcache.ini

# Entrypoint
COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]

# Lancement Apache au premier plan
EXPOSE 8080
CMD ["apache2-foreground"]
