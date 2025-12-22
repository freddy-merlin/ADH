#!/bin/bash

# Définir les variables d'environnement pour la phase de build
export CACHE_DRIVER=array
export SESSION_DRIVER=file
export QUEUE_DRIVER=sync

# Installe les dépendances Composer
composer install --no-dev --optimize-autoloader

# Génère la clé d'application si elle n'existe pas
if [ ! -f ".env" ]; then
    cp .env.example .env
    php artisan key:generate
fi

# Optimise Laravel pour la production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Nettoie le cache (au cas où)
#php artisan optimize:clear