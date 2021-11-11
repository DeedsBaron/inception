FROM debian:buster

RUN apt-get update &&\
	apt-get upgrade -y &&\
	apt-get -y install curl &&\
	apt-get -y install php7.3 php-mysql php-fpm php-pdo php-gd php-cli php-mbstring &&\
	curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar &&\
	chmod +x wp-cli.phar &&\
	mv wp-cli.phar /usr/local/bin/wp &&\
	mkdir -p /var/www/html/wordpress &&\
	mkdir -p /run/php


WORKDIR /var/www/html/wordpress

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf

COPY ./conf/wp-config.php ./

COPY ./tools/init.sh ./

CMD bash init.sh