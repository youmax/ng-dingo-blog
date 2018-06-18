FROM php:7.2.6-fpm
# always run apt update when start and after add new source list, then clean up at end.
# install mongodb extension
RUN apt-get update \
&& apt-get install -y libcurl4-openssl-dev pkg-config libssl-dev \
&& pecl install mongodb \
&& docker-php-ext-enable mongodb

