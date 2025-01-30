FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    && docker-php-ext-configure opcache --enable-opcache \
    && docker-php-ext-install opcache

COPY config/php/opcache.ini /usr/local/etc/php/conf.d/
WORKDIR /var/www

EXPOSE 9000

CMD ["php", "-S", "0.0.0.0:9000", "-t", "/var/www"]
