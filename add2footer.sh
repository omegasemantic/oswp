#!/bin/bash
set -e

echo "==> Current pages:"
docker exec -i oswp-wordpress-1 wp post list --post_type=page --allow-root

echo ""
read -p "Page ID to add to Footer Menu: " ID

docker exec -i oswp-wordpress-1 wp menu item add-post "Footer Menu" "$ID" --allow-root

echo ""
echo "==> Footer Menu now:"
docker exec -i oswp-wordpress-1 wp menu item list "Footer Menu" --allow-root
