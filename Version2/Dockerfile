FROM php:8.2-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
RUN mkdir -d /var/www/html/uploads

CMD [ "php", "./uploader.php" ]