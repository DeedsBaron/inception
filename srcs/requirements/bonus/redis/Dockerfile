FROM debian:buster

RUN apt-get update &&\
	apt-get upgrade -y &&\
	apt-get -y install redis &&\
	apt-get -y install php-igbinary&&\
	apt-get -y install php-redis

COPY ./conf/redis.conf ./

CMD ["redis-server", "./", "--protected-mode", "no"]