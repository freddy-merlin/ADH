# Utilise une image officielle PHP avec Apache
FROM php:8.2-apache

# Définit le répertoire de travail
WORKDIR /var/www/html

# Installe les dépendances système et PHP
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Active le module de réécriture Apache
RUN a2enmod rewrite

# Installe Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copie tout le projet dans le container
COPY . .

# Configure les permissions pour Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Exécute le script de déploiement
COPY scripts/deploy.sh /usr/local/bin/deploy.sh
RUN chmod +x /usr/local/bin/deploy.sh
RUN /usr/local/bin/deploy.sh

# Configure Apache pour écouter sur le port de Render
RUN echo "Listen 8080" > /etc/apache2/ports.conf
RUN sed -i 's/80/8080/g' /etc/apache2/sites-available/*.conf
RUN sed -i 's/80/8080/g' /etc/apache2/apache2.conf


# Copie la configuration Apache personnalisée
COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Désactive la configuration par défaut inadaptée (si elle existe)
RUN a2dissite 000-default.conf 2>/dev/null || true

# Active notre nouvelle configuration
RUN a2ensite 000-default.conf

 

# Port exposé (Render utilise le port 8080 ou 10000)
EXPOSE 8080

# Commande de démarrage
CMD ["apache2-foreground"]
