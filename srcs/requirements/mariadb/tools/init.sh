#!/bin/bash
service mysql start
echo "CREATE DATABASE ${DB_NAME};" | mysql -u root --skip-password
echo "CREATE USER '"${DB_USER}"'@'wordpress.B.Lebowski' IDENTIFIED BY '"${DB_USER_PASS}"';" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO '"${DB_USER}"'@'wordpress.B.Lebowski';" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '"${DB_ROOT_PASS}"';" | mysql -u root --skip-password
killall mysqld