FROM php:8.2-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Optional: install PHP extensions (DB, etc.)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set working directory
WORKDIR /var/www
