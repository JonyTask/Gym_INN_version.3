init:
	docker-compose up -d --build
	docker-compose exec php composer install
	docker-compose exec php cp .env.example .env
	docker-compose exec php php artisan key:generate
	docker-compose exec php php artisan storage:link
	docker-compose exec php chmod -R 777 storage bootstrap/cache
up:
	docker-compose up -d
stop:
	docker-compose stop
down:
	docker-compose down
sql:
	docker compose exec mysql bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'
php:
	docker compose exec php bash