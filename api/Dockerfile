FROM php:7.2.6-fpm
MAINTAINER youmax <youmax210139@gmail.com>
# always run apt update when start and after add new source list, then clean up at end.
# install mongodb extension
RUN pecl install mongodb \
&& docker-php-ext-enable mongodb

