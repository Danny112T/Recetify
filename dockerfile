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

# Copiar los archivos de la aplicación
COPY . /var/www/

RUN mkdir -p /var/www/bootstrap/cache && \
    chmod -R 777 /var/www/bootstrap/cache

# Establecer el directorio de trabajo
WORKDIR /var/www/

# Instalar las dependencias de Laravel
RUN composer install --no-interaction --no-scripts --prefer-dist

# Ejecutar los comandos de consola de Artisan
CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]

# Establecer el usuario predeterminado
USER www-data

# Exponer el puerto 9000 para php-fpm
EXPOSE 8000
