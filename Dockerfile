FROM composer:2 as composer

FROM php:8.2-buster

RUN apt-get -qq update && apt-get -qq install -y \
  autoconf automake cmake curl git libtool \
  pkg-config unzip zlib1g-dev

ARG MAKEFLAGS=-j8

WORKDIR /github/grpc

RUN git clone https://github.com/grpc/grpc . && \
  git submodule update --init --recursive

WORKDIR /github/grpc/cmake/build

RUN cmake ../.. && \
  make protoc grpc_php_plugin

RUN pecl install grpc && \
  docker-php-ext-enable grpc

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html