FROM php:8.2-fpm
COPY ./php.ini /usr/local/etc/php/
RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libonig-dev \
                        libzip-dev zip unzip ssmtp \
  && docker-php-ext-install pdo_mysql mysqli gd iconv exif zip

# ssmtp: Mailhog へ転送
RUN echo "mailhub=mailhog:1025" >> /etc/ssmtp/ssmtp.conf \
 && echo "hostname=localhost" >> /etc/ssmtp/ssmtp.conf

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer