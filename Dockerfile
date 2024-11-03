# from official PHP image with Apache
FROM php:8.0-apache

# Enable PDO and PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite

# Set the working directory
WORKDIR /var/www/html

# Copy files to the web server directory
COPY public /var/www/html/public
COPY src /var/www/html/src
COPY view /var/www/html/view
COPY config /var/www/html/config
COPY db /var/www/html/db
COPY img /var/www/html/img

# Set environment variable for the SQLite database path
ENV DB_PATH /var/www/html/db/bmo.sqlite

# Set the necessary permissions for the db folder
RUN chmod -R 777 /var/www/html/db

# Expose port 80 for HTTP traffic
EXPOSE 80
