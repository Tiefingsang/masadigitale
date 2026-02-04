#!/bin/bash

echo "🔧 Correction du mot de passe..."

# 1. Arrêter les services
echo "1. Arrêt des services..."
sudo docker-compose down

# 2. Corriger docker-compose.yml
echo "2. Correction de docker-compose.yml..."
sed -i 's/MYSQL_ROOT_PASSWORD: root/MYSQL_ROOT_PASSWORD: Tiefing6689-/' docker-compose.yml
sed -i 's/DB_PASSWORD=Tieifng6689-/DB_PASSWORD=Tiefing6689-/' docker-compose.yml

# 3. Vérifier .env Laravel
echo "3. Vérification du .env..."
if grep -q "DB_PASSWORD=Tieifng6689-" .env; then
    sed -i 's/DB_PASSWORD=Tieifng6689-/DB_PASSWORD=Tiefing6689-/' .env
    echo "✅ .env corrigé"
fi

# 4. Supprimer l'ancienne base pour repartir à zéro
echo "4. Nettoyage de l'ancienne base..."
sudo docker volume rm -f masadigitale_mysql_data 2>/dev/null || true

# 5. Redémarrer
echo "5. Redémarrage des services..."
sudo docker-compose up -d --build

# 6. Attendre
echo "6. Attente du démarrage..."
sleep 15

# 7. Tester
echo "7. Test de connexion..."
sudo docker exec masadigitale_app php artisan tinker --execute="try { DB::connection()->getPdo(); echo '✅ Connexion MySQL OK'; } catch (Exception \$e) { echo '❌ Erreur: ' . \$e->getMessage(); }"

echo ""
echo "🎯 Correction terminée !"
echo "Mot de passe MySQL: Tiefing6689-"
