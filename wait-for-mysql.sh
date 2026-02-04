#!/bin/bash

echo "⏳ Attente que MySQL soit prêt..."

MAX_RETRIES=30
RETRY_COUNT=0

while [ $RETRY_COUNT -lt $MAX_RETRIES ]; do
    sudo docker exec masadigitale_db mysqladmin ping -uroot -pTiefing6689- --silent
    if [ $? -eq 0 ]; then
        echo "✅ MySQL est prêt !"
        break
    fi
    
    echo "⏱️  Attente ($((RETRY_COUNT+1))/$MAX_RETRIES)..."
    sleep 5
    RETRY_COUNT=$((RETRY_COUNT+1))
done

if [ $RETRY_COUNT -eq $MAX_RETRIES ]; then
    echo "❌ MySQL n'est pas prêt après $MAX_RETRIES essais"
    exit 1
fi

# Attendre encore un peu pour être sûr
sleep 5

# Tester la connexion Laravel
echo "🔗 Test de connexion Laravel..."
sudo docker exec masadigitale_app php artisan tinker --execute="try { DB::connection()->getPdo(); echo '✅ Laravel → MySQL OK'; } catch (Exception \$e) { echo '❌ Erreur: ' . \$e->getMessage(); }"
