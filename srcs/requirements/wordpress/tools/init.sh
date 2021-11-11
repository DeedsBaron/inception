#!/bin/bash
wp core download --allow-root
wp core install --allow-root --path='/var/www/html/wordpress' --url="https://localhost" --title="The cake is a lie" --admin_user="Dbaron" --admin_password="0809" --admin_email="dbaron@student.21-school.ru"
wp user create Editor1 editor1@example.com --allow-root --role=editor --user_pass=0809
wp plugin install redis-cache --allow-root
wp plugin activate redis-cache --allow-root
wp redis enable --force --allow-root
chmod 775 -R /var/www/html/wordpress
chown -R www-data:www-data /var/www
php-fpm7.3 -F -R