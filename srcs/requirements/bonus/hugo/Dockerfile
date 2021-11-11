FROM debian:buster

RUN apt-get update &&\
	apt-get upgrade -y &&\
	apt-get -y install wget &&\
	apt-get -y install hugo &&\
	wget https://github.com/gohugoio/hugo/releases/download/v0.88.1/hugo_extended_0.88.1_Linux-64bit.deb &&\
	dpkg --install ./hugo_extended_0.88.1_Linux-64bit.deb

ENV PATH="/usr/local/go/bin:${PATH}"

WORKDIR /var/www/html/my-site

CMD hugo server --bind=0.0.0.0 --appendPort=false  --port=1313 --baseUrl="https://localhost:443/my-site/" --buildDrafts --theme=hugo-coder
