FROM php:8.2-apache

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Optional: install PHP extensions like mysqli
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set working directory (optional)
WORKDIR /var/www/html

# Copy all project files into the container
COPY . /var/www

# Copy public folder into Apache's document root
COPY public/ /var/www/html/

# Set recommended permissions (optional)
RUN chown -R www-data:www-data /var/www