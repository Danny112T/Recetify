FROM richarvey/nginx-php-fpm:3.1.3

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# add system dependencies
RUN apk update && apk add \
    git \
    curl \
    libpng-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip

RUN apk update

# Install idk
RUN apk add --update nodejs npm

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN adduser -G www-data,root -u $uid -D -h /home/$user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www/
COPY . /var/www/
RUN composer install

USER $user
