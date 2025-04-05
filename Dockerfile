FROM php:8.2-apache

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Optional: install PHP extensions like mysqli
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set working directory (optional)
WORKDIR /var/www/html