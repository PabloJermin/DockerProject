
# Use the official PHP image as a base image
FROM php:8.1-apache

# Copy the PHP and HTML files to the /var/www/html directory
COPY index.html /var/www/html/
COPY uploader.php /var/www/html/

# Create an uploads directory
RUN mkdir -p /var/www/html/uploads

# Set the proper permissions for the uploads directory
RUN chown -R www-data:www-data /var/www/html/uploads \
    && chmod -R 755 /var/www/html/uploads \
    # granting apache permissions to access files.
    && chgrp -R www-data /var/www/html \
    && find /var/www/html -type d -exec chmod g+rx {} + \
    && find /var/www/html -type f -exec chmod g+r {} +


# Expose port 80 to the host
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
