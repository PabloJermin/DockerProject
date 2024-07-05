# Use the official PHP image with Apache
FROM php:7.4-apache

# Copy the HTML and PHP files to the Apache web directory
COPY index.html /var/www/html/
COPY login.php /var/www/html/
COPY style.css /var/www/html/

# Create an uploads directory
RUN mkdir -p /var/www/html/uploads

# Set the proper permissions for the uploads directory
RUN chown -R www-data:www-data /var/www/html/uploads \
    && chmod -R 755 /var/www/html/uploads \
# granting apache permissions to access files.
    && chgrp -R www-data /var/www/html \
    && find /var/www/html -type d -exec chmod g+rx {} + \
    && find /var/www/html -type f -exec chmod g+r {} +


# Expose port 80
EXPOSE 80
