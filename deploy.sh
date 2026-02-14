#!/usr/bin/env bash
set -euo pipefail

# Simple deploy script for Masadigitale
# Usage: run this on the VPS from the repo root: ./deploy.sh

echo "Pull latest code and rebuild containers..."
git fetch origin
git checkout main
git pull origin main

echo "Pulling images and building app image..."
docker compose pull || true
docker compose build --no-cache app
docker compose up -d

echo "Installing PHP deps and optimizing autoload..."
docker compose exec app composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

echo "Running migrations..."
docker compose exec app php artisan migrate --force

echo "Creating storage symlink and fixing permissions..."
docker compose exec app php artisan storage:link || true
docker compose exec app chown -R www-data:www-data storage bootstrap/cache || true
docker compose exec app chmod -R 775 storage bootstrap/cache || true

echo "Caching config, routes and views..."
docker compose exec app php artisan config:cache || true
docker compose exec app php artisan route:cache || true
docker compose exec app php artisan view:cache || true

echo "Restarting compose services..."
docker compose restart

echo "Deploy finished. Check logs if any issue: docker compose logs -f app"
