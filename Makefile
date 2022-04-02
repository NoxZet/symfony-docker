SHELL := /bin/bash

config:
	echo "UID=$(shell id -u)" > ".env"
	cp "src/.env.example" "src/.env"

init:
	docker exec symfony_php "composer" "install"
	docker exec symfony_php "php" "bin/console" "doctrine:database:create"
	docker exec symfony_php "php" "bin/console" "doctrine:migrations:migrate" "-n"

docker-up:
	docker-compose up -d

docker-up-recreate:
	docker-compose up --build --force-recreate -d

docker-down:
	docker-compose down

docker-down-remove:
	docker-compose down --volumes

php-bash:
	docker exec -it symfony_php "/bin/bash"

php-bash-root:
	docker exec -it --user=0 symfony_php "/bin/bash"
