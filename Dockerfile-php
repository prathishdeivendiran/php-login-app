FROM php:8.1-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Enable apache mod_rewrite (optional)
RUN a2enmod rewrite

# Use official PHP-Apache image
FROM php:8.1-apache

# Install required extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files into Apache document root
COPY homepage/ /var/www/html/

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]