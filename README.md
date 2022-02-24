# :heavy_check_mark: inception
This project is aim to understand how containers and docker-compose work and this project is a part methodology learning students from 42 school (21 school in Moscow). 
Problem description:
# Description
Inception is a school 42 system administration and networking project involving docker and docker-compose, 
asking us to setup multiple docker containers that work together as a complete infrastructure. In mandatory part it was necessary to run Nginx, Wordpress and MariaDB 
each in their own container. It was also necessary to provide a single entry point to the cluster via NGINX with TLSv1.2 or TLSv1.3. 

<div align="center">
  <b>Scheme of cluster:</b>
</div>

![image](https://user-images.githubusercontent.com/80648065/155556575-4493db0e-4aea-42ef-a29d-e826d91aefb7.png)

In bonus part it was necessary to run Redis Cache for Wordpress, ftp server, Adminer, create a simple static website in the language of your choice except PHP
and one more service of my choice. I've chosen Hugo service, because it helps to build static websites and Hugo has it's own webserver to serve that site.
## Usage
Just use ``make`` to set everything up


## Other
**Author:**  
:vampire:*[Deeds Baron](https://github.com/DeedsBaron)*  

