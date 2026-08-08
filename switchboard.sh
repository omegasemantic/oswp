#!/bin/bash
set -e
CONTAINER="oswp-wordpress-1"
while true; do
        echo ""
        echo "==> OSWP Docker Switchboard (local)"
        echo "1) Add page to Footer Menu"
        echo "2) php -l lint a file"
        echo "3) List posts by type"
        echo "4) List pages"
        echo "5) Flush rewrite rules"
        echo "6) Remove item from Footer Menu"
        echo "0) Exit"
        read -p "Choice: " CHOICE
        case "$CHOICE" in
                1)
                        docker exec -i "$CONTAINER" wp post list --post_type=page --allow-root
                        read -p "Page ID to add to Footer Menu: " ID
                        docker exec -i "$CONTAINER" wp menu item add-post "Footer Menu" "$ID" --allow-root
                        docker exec -i "$CONTAINER" wp menu item list "Footer Menu" --allow-root
                        ;;
                2)
                        read -p "Path inside container (e.g. /var/www/html/wp-content/themes/oswp-child/page.php): " FILE
                        docker exec -i "$CONTAINER" php -l "$FILE"
                        ;;
                3)
                        read -p "Post type (e.g. event, movie, screening, page): " PTYPE
                        docker exec -i "$CONTAINER" wp post list --post_type="$PTYPE" --allow-root
                        ;;
                4)
                        docker exec -i "$CONTAINER" wp post list --post_type=page --allow-root
                        ;;
                5)
                        docker exec -i "$CONTAINER" wp rewrite flush --allow-root
                        ;;
                6)
                        docker exec -i "$CONTAINER" wp menu item list "Footer Menu" --fields=db_id,title,url --allow-root
                        read -p "Menu item db_id to remove: " ITEM_ID
                        docker exec -i "$CONTAINER" wp menu item delete "$ITEM_ID" --allow-root
                        docker exec -i "$CONTAINER" wp menu item list "Footer Menu" --allow-root
                        ;;
                0)
                        exit 0
                        ;;
                *)
                        echo "Not a valid option."
                        ;;
        esac
done
