FROM php:7.3.7-fpm

RUN apt-get update && \
    apt-get install -y git

RUN yes | pecl install xdebug-2.9.0 \
    && docker-php-ext-enable xdebug


COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

COPY conf.d/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Add a non-root user to prevent files being created with root permissions on host machine
ARG uid=1000
ARG gid=1000

RUN groupadd -g $gid appuser && useradd -u $uid -g appuser -m appuser

USER appuser

WORKDIR /var/www/app/laravel

