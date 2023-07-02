FROM php:8.2.3-fpm

ARG user
ARG uid

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    git \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    libonig-dev \
    libxml2-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    libpq-dev \
    zlib1g-dev \
    libzip-dev \
    libz-dev \
    libwebp-dev \
    supervisor \
    sudo


# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN pecl install -o -f redis \
&&  rm -rf /tmp/pear \
&&  docker-php-ext-enable redis

# Install PHP extensions
RUN docker-php-ext-install intl pdo pdo_pgsql pgsql mbstring exif pcntl bcmath zip gettext
RUN docker-php-ext-configure gd --with-freetype --with-webp --with-jpeg && \
    docker-php-ext-install gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN curl -sL https://deb.nodesource.com/setup_18.x -o nodesource_setup.sh
RUN bash nodesource_setup.sh
RUN apt-get install nodejs -y

# Add user for laravel application
RUN groupadd -g $uid $user
RUN useradd -u $uid -ms /bin/bash -g $user $user

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=$uid:$user . /var/www

# Change current user to www
USER $user

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]

