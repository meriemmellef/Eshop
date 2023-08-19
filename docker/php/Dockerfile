FROM php:7.0-fpm-alpine
MAINTAINER Adnen Chouibi <adnen.chouibi@gmail.com>

RUN apk update; \
    apk upgrade;


# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apk update && apk add --no-cache \
    bash \
    build-base shadow vim curl \
    php7 \
    php7-fpm \
    php7-common \
    php7-pdo \
    php7-pdo_mysql \
    php7-mysqli \
    php7-mcrypt \
    php7-mbstring \
    php7-xml \
    php7-openssl \
    php7-json \
    php7-phar \
    php7-zip \
    php7-gd \
    php7-dom \
    php7-session \
    php7-zlib \
    zip libzip-dev \
    freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev icu-dev

RUN docker-php-ext-install  pdo pdo_mysql  zip exif intl
RUN docker-php-ext-enable opcache pdo_mysql

# Add gd extension
RUN docker-php-ext-configure  gd \
    --with-gd \
    --with-freetype-dir=/usr/include/ \
    --with-png-dir=/usr/include/ \
    --with-jpeg-dir=/usr/include/ && \
  NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) && \
  docker-php-ext-install -j${NPROC} gd && \
  apk del --no-cache freetype-dev libpng-dev libjpeg-turbo-dev && \
  docker-php-ext-configure  intl


RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && mv composer.phar /usr/local/bin/composer
COPY www.conf $PHP_INI_DIR/php-fpm.d/
COPY symfony.ini "$PHP_INI_DIR/php.ini"


#CMD bash -c "rm -rf app/cache/* && chmod 777 app/cache app/logs";
#CMD bash -c "mkdir -m 777 -p web/uploads/produits";
#CMD bash -c " mkdir -m 777 -p web/uploads/commandes";
#CMD bash -c " mkdir -m 777 -p web/uploads/condition_vente";
#CMD bash -c "COMPOSER_MEMORY_LIMIT=-1 composer install";



