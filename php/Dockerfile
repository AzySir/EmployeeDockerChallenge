# PHP image with core extensions
FROM php:7.2.7-fpm-alpine3.7

# Upgrade/update Alpine Package Managers
RUN apk update; \
    apk upgrade;

# Install mysqli extension
RUN docker-php-ext-install mysqli