FROM composer:latest

RUN apk add --no-cache --virtual --update autoconf g++ make && \
pecl install mongodb && \
docker-php-ext-enable mongodb