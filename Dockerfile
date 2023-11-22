FROM php:7.2-apache

# libfreetype-dev \
# --with-freetype --with-jpeg

RUN apt-get update && apt-get install -y \
		libjpeg62-turbo-dev \
		libpng-dev \
	&& docker-php-ext-configure gd \
	&& docker-php-ext-install -j$(nproc) gd

RUN chmod -R 755 /var/www/html