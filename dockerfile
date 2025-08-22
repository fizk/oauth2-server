FROM php:8.4.11-cli-trixie

ARG COMPOSER_VERSION=2.8.6

RUN apt-get update; \
     apt-get upgrade; \
     apt-get install \
        git \
        libicu-dev \
        zip -y;

RUN curl -sS https://getcomposer.org/installer \
    | php -- --install-dir=/usr/local/bin --filename=composer --version=$COMPOSER_VERSION