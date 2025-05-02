# Use the official PHP image from the Docker registry
FROM php:8.1-apache

# Install necessary PHP extensions (like PDO, GD, etc.)
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy your application code into the container
COPY . /var/www/html/

# Expose the port that Apache will run on
EXPOSE 80

# Run Apache in the foreground
CMD ["apache2-foreground"]
