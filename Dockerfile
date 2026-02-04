FROM php:8.2-fpm

# Configure noninteractive build and make apt more resilient to transient network issues.
ENV DEBIAN_FRONTEND=noninteractive

# Install necessary packages with HTTPS-enabled sources and retry logic to tolerate transient failures
RUN apt-get update || true && \
    apt-get install -y --no-install-recommends apt-transport-https ca-certificates gnupg dirmngr || true && \
    if [ -f /etc/apt/sources.list ]; then \
        sed -i 's|http://deb.debian.org/|https://deb.debian.org/|g' /etc/apt/sources.list || true; \
    else \
        printf 'deb https://deb.debian.org/debian stable main\ndeb https://deb.debian.org/debian-security stable-security main\n' > /etc/apt/sources.list; \
    fi && \
    for i in 1 2 3; do \
        apt-get update && apt-get install -y --no-install-recommends \
            git \
            curl \
            ca-certificates \
            libpng-dev \
            libonig-dev \
            libxml2-dev \
            zip \
            unzip \
            libzip-dev \
        && break || sleep 5; \
    done && \
    rm -rf /var/lib/apt/lists/*

# Installer les extensions PHP nécessaires pour Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Créer un utilisateur non-root
RUN useradd -G www-data -u 1000 -d /home/laravel laravel \
    && mkdir -p /home/laravel/.composer \
    && chown -R laravel:laravel /home/laravel

# Définir le répertoire de travail
WORKDIR /var/www

USER laravel

CMD ["php-fpm"]
