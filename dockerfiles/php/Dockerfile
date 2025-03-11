# Use the official PHP Apache image
FROM php:8.1-apache

# Copy virtual host config for server apache
COPY ../../dockerfiles/php/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Enable rewrite mode
RUN a2enmod rewrite

# Install necessary packages
RUN apt-get update && \
    apt-get install \
    libzip-dev \
    wget \
    git \
    unzip \
    -y --no-install-recommends

# Install PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

# Copy composer installable
COPY ../../dockerfiles/php/install/install-composer.sh ./

# Set the working directory in the container
WORKDIR /var/www/html

# Expose port 8101 for the PHP built-in server
EXPOSE 8101

# Run the PHP built-in server
CMD ["php", "-S", "0.0.0.0:8101", "-t", "/var/www/html"]
