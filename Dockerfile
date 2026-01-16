FROM php:8.2-apache

#USER root

WORKDIR /var/www/html

# Install all the dependencies and enable PHP modules
RUN apt-get update && apt-get upgrade -y && apt-get install -y \
    #procps \
    #nano \
    git \
    zip \
    curl \
    libicu-dev \
    libbz2-dev \
    libpng-dev \
    libjpeg-dev \
    #libmbcrypt-dev \
    libonig-dev \
    unzip \
    zlib1g-dev \
    libxml2 \
    libxml2-dev \
    libsqlite3-dev \
    libreadline-dev \
    libfreetype6-dev \
    supervisor \
    cron \
    sudo \
    g++ \
    libzip-dev \
    libaio-dev \
    gnupg


# Installation dans votre Image du minimum pour que Docker fonctionne
RUN docker-php-ext-configure intl
RUN docker-php-ext-install bz2 \
    bcmath \
    gd \
    mbstring \
    exif \
    intl \
    opcache \
    calendar \
    zip \
    pdo_sqlite

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install apt-utils libxml2-dev apt-transport-https

#Now move to Dockerfile and use the COPY directive to copy our local vhost configuration to apache configuration
COPY vhost.conf /etc/apache2/sites-available/000-default.conf

# Installation dans votre image de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#ENV WEB_DOCUMENT_ROOT .
#ENV APP_ENV production
#WORKDIR /app
COPY . .

RUN cp -n .env.example .env

# Installation et configuration de votre site pour la production
# https://laravel.com/docs/8.x/deployment#optimizing-configuration-loading
RUN composer install --no-interaction --optimize-autoloader --no-dev
# Generate security key
RUN php artisan key:generate --force || true


# 1) Créer le fichier SQLite (si tu utilises SQLite en prod, ce qui est rare)
RUN mkdir -p database \
 && touch database/database.sqlite \
 && chown www-data:www-data database/database.sqlite \
 && chmod 664 database/database.sqlite

# 2) Lancer les migrations + seed
RUN php artisan migrate:fresh --force || true


RUN php artisan optimize:clear || true

#RUN chown -R www-data:www-data .
RUN chown -R www-data:www-data /var/www/html \
&& a2enmod rewrite

RUN apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
