# Use the official PHP image
FROM php:7.4-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli

# Copy application files to the container
COPY ./sqlinjection_demo /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]