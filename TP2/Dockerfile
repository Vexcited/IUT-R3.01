FROM php:8.2-apache
ENV ACCEPT_EULA=Y

RUN apt-get update && apt-get install -y \
  libpng-dev \
  libjpeg-dev \
  libfreetype6-dev \
  zip \
  unzip \
  git \
  && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql
