FROM php:8.3-apache

WORKDIR /var/www/html/

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

RUN apt-get update && apt-get install -y --no-install-recommends \
	nodejs \
	npm \
	locales \
	git \
	unzip \
	libzip-dev \
	libicu-dev \
	libonig-dev \
	curl \
	libonig-dev \
	libxml2-dev \
	libfreetype6-dev \
	libjpeg62-turbo-dev \
	libpng-dev \
	libpq-dev 
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd intl pdo pdo_pgsql pgsql zip bcmath \
	&& docker-php-ext-enable gd intl pdo pdo_pgsql pgsql zip bcmath \
	&& composer config -g process-timeout 3600 \
  && composer config -g repos.packagist composer https://packagist.org


RUN a2enmod rewrite

COPY laravel-permissions.sh /usr/local/bin/laravel-permissions.sh
RUN chmod u+x /usr/local/bin/laravel-permissions.sh \
	&& useradd -ms /bin/bash aleksiyd \
	&& usermod -a -G www-data aleksiyd \
	&& chown aleksiyd:www-data /var/www/html
# USER aleksiyd
