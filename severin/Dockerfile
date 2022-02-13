# 2301852581 - Delvin Nicholas
# Dockerfile UAS Server Admin
# Pull PHP & mysql for webserver
FROM php:7.4.26-apache
# Copy File
COPY index.php /var/www/html
# chown : user & group
RUN chown -R www-data:www-data /var/www/html
# chmod 774
RUN chmod -R 774 /var/www/html
# Install mysqli extension
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
