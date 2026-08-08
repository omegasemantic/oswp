#!/bin/bash
set -e

echo "==> Current pages (ID, title, current order):"
docker exec -i oswp-wordpress-1 wp post list --post_type=page --fields=ID,post_title,menu_order --allow-root

echo ""
read -p "Page ID to reorder: " ID
read -p "New menu_order (lower = earlier in header): " ORDER

docker exec -i oswp-wordpress-1 wp post update "$ID" --menu_order="$ORDER" --allow-root

echo ""
echo "==> Pages now:"
docker exec -i oswp-wordpress-1 wp post list --post_type=page --fields=ID,post_title,menu_order --allow-root
