FROM debian:buster

ARG CERTS_K
ARG CERTS_C

RUN apt-get update &&\
	apt-get upgrade -y &&\ 
	apt-get -y install wget &&\ 
	apt-get -y install nginx &&\ 
	apt-get -y install net-tools &&\
	apt-get -y install ftp &&\
	apt-get -y install curlftpfs &&\
	openssl req -x509 -nodes -days 365 -subj "/C=RU/ST=Moscow/L=Moscow/O=school21/CN=dbaron" -newkey rsa:2048 -keyout ${CERTS_K} -out ${CERTS_C};

COPY ./conf/dbaron /etc/nginx/sites-enabled

CMD ["nginx", "-g", "daemon off;"]