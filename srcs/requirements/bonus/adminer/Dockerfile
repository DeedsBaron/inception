FROM debian:buster

RUN apt-get update &&\
	apt-get upgrade -y &&\
	apt-get -y install wget &&\
	wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php &&\
	mv adminer-4.8.1.php adminer.php

CMD cp /adminer.php /var/www/html/wordpress