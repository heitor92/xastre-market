#!/bin/sh

NAME_CONTAINER="$(docker ps --filter "label=command.php" --filter status=running --format "{{.Names}}")"
echo "Executado composer no container $NAME_CONTAINER"
echo "WorkDir Container: /var/www/html/"
echo "WorkDir Local: $(pwd)/xastre-market-app/"
docker exec -it  $NAME_CONTAINER composer "$@"

exit $?
