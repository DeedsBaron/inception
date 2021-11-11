all:
	@echo "\033[0;35m"
	docker-compose -f ./srcs/docker-compose.yml --env-file srcs/.env up -d --remove-orphans 
stop:
	@echo "\033[0;31m"
	docker-compose -f srcs/docker-compose.yml --env-file srcs/.env down --remove-orphans
re:	stop
	@echo "\033[0;36m"
	docker volume rm $$(docker volume ls -q)
	docker-compose -f srcs/docker-compose.yml --env-file srcs/.env up --build -d
rewp:
	docker-compose -f srcs/docker-compose.yml build --no-cache wordpress
reng:
	docker-compose -f srcs/docker-compose.yml stop nginx
	docker-compose -f srcs/docker-compose.yml build nginx
	docker-compose -f srcs/docker-compose.yml start nginx
redb:
	docker-compose -f srcs/docker-compose.yml stop mariadb
	docker-compose -f srcs/docker-compose.yml build mariadb
	docker-compose -f srcs/docker-compose.yml start mariadb

read:
	docker-compose -f srcs/docker-compose.yml stop adminer
	docker-compose -f srcs/docker-compose.yml build adminer
	docker-compose -f srcs/docker-compose.yml start adminer

fclean: stop
	docker system prune -a
	docker volume rm $$(docker volume ls -q)
	
status:
	docker-compose -f srcs/docker-compose.yml ps -a
stopwp:
	docker-compose -f srcs/docker-compose.yml stop wordpress --remove-orphans
stopweb:
	docker-compose -f srcs/docker-compose.yml stop nginx
logs:
	docker-compose -f srcs/docker-compose.yml logs
db:
	docker exec -it db bash
ng:
	docker exec -it nginx bash
wp:
	docker exec -it wordpress bash
hugo:
	docker exec -it hugo bash 
adminer:
	docker exec -it adminer bash
ftp:
	docker exec -it ftp bash
redis:
	docker exec -it redis bash
restart:
	sudo systemctl restart docker.socket docker.service
fvol:
	docker volume rm $$(docker volume ls -q)
#docker rm -f $(docker ps -a -q)