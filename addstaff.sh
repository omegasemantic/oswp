#!/bin/bash

# add a staff member
#docker exec -it oswp-wordpress-1 wp term create staff "Mary" --allow-root
docker exec -it oswp-wordpress-1 wp term create staff "Rodger Gallagher" --allow-root
docker exec -it oswp-wordpress-1 wp term create staff "Simon Kearns" --allow-root


# confirm
docker exec -it oswp-wordpress-1 wp term list staff --allow-root
