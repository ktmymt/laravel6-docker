FROM php:8.0-fpm-buster
SHELL [ "/bin/bash", "-oeux", "pipefail", "-c"]

ENV TZ=UTC \
  DB_CONNECTION=mysql \
  DB_HOST=db \
  DB_DATABASE=local \
  DB_USERNAME=test \
  DB_PASSWORD=password

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
  apt-get -y install git libicu-dev libonig-dev && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  mkdir /var/run/php-fpm && \
  mkdir /var/log/php && \
  docker-php-ext-install intl pdo_mysql

COPY ./php-fpm.d/zzz-docker.conf /usr/local/etc/php-fpm.d/zzz-docker.conf
COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /work/src
