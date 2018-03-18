FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    zip libbz2-dev git \
    && apt-get clean
RUN docker-php-ext-install imap

RUN yes | pecl install xdebug

RUN apt-get install -y sudo

CMD ["php-fpm"]
