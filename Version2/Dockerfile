FROM php:8.2-apache

# copy all the files into the docker directory
COPY . /usr/src/myapp

# create a directory to save uploaded files
RUN mkdir -p /var/www/html/uploads

# permissions for the upload folder
RUN chmod -R www-data:www-data /var/www/html/uploads && chmod -R 755 /var/www/html/uploads

# exposing the port 80
EXPOSE 80

# start apache
CMD [ "php", "./uploader.php" ]