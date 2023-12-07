FROM php:8.1-apache

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git wget zlib1g-dev libzip-dev unzip libicu-dev libxml2-dev && \
    docker-php-ext-install zip && \
    docker-php-ext-configure intl && \
    docker-php-ext-install intl && \
    docker-php-ext-install soap && \
    docker-php-ext-install mysqli pdo pdo_mysql && \
    docker-php-ext-enable pdo_mysql && \
    touch /usr/local/etc/php/php.ini && \
    echo "memory_limit = -1" >> /usr/local/etc/php/php.ini && \
    echo "date.timezone = America/Los_Angeles" >> /usr/local/etc/php/php.ini

COPY --from=composer:2.4.1 /usr/bin/composer /usr/bin/composer

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

USER www-data
