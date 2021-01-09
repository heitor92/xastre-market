#!/bin/sh

NAME_CONTAINER="$(docker ps --filter "label=command.php" --filter status=running --format "{{.Names}}")"
#docker exec -it --user $(id -u):$(id -g) projeto-laravel composer "$@"
echo "Executado npm no container $NAME_CONTAINER"
echo "WorkDir Container: /var/www/html/"
echo "WorkDir Local: $(pwd)/xastre-market-app/"
docker exec -it --user $(id -u):$(id -g) $NAME_CONTAINER npm --prefix=$HOME/.npm "$@"

exit $?
