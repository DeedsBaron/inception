FROM debian:buster

ARG DB_NAME
ARG DB_USER_PASS
ARG DB_USER
ARG DB_ROOT_PASS

COPY ./tools/init.sh ./

RUN apt-get update &&\
	apt-get upgrade -y &&\
	apt-get -y install mariadb-server &&\
	bash init.sh

COPY ./conf/50-server.cnf ./etc/mysql/mariadb.conf.d

CMD ["mysqld_safe"]
