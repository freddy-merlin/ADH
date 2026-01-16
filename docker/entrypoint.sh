
#!/bin/sh
set -e

cd /var/www/html

# Création fichier SQLite si nécessaire
if [ "$DB_CONNECTION" = "sqlite" ]; then
  mkdir -p database
  if [ ! -f "database/database.sqlite" ]; then
    touch database/database.sqlite
    chown www-data:www-data database/database.sqlite
    chmod 664 database/database.sqlite
  fi
fi

# Installer vendor si absent (image rebuild pas nécessaire si déjà présent)
if [ ! -d "vendor" ]; then
  export COMPOSER_ALLOW_SUPERUSER=1
  composer install --no-interaction --prefer-dist --no-dev --optimize-autoloader
fi

# Provision .env minimal si absent (optionnel en prod : on préfère env_file)
if [ ! -f ".env" ] && [ -f ".env.example" ]; then
  cp .env.example .env
fi

# Générer APP_KEY si vide
if ! grep -q "^APP_KEY=" .env 2>/dev/null || [ -z "$(grep '^APP_KEY=' .env | cut -d= -f2)" ]; then
  php artisan key:generate --force || true
fi

# Permissions (au cas où un volume storage remplace l’image)
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Caches Laravel (si variables disponibles)
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# (Optionnel) Migrations auto en prod – décommente si souhaité
php artisan migrate --force || true

exec "$@"
