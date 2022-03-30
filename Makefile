SHELL := /bin/bash

config:
	echo "UID=$(shell id -u)" > ".env"

init:
	docker exec symfony_php "composer" "install"

docker-up:
	docker-compose up -d

docker-upr:
	docker-compose up --build --force-recreate -d

docker-down:
	docker-compose down

php-bash:
	docker exec -it symfony_php "/bin/bash"

php-bash-root:
	docker exec -it --user=0 symfony_php "/bin/bash"
