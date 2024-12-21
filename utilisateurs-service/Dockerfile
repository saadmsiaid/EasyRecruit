# Use an official PHP image as the base
FROM php:8.4-fpm

# Set environment variables
ENV DEBIAN_FRONTEND=noninteractive \
    COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_PROCESS_TIMEOUT=2000

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    curl \
    git \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    libpq-dev \
    libssl-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo_mysql zip intl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR /var/www

# Copy project files to the container
COPY . .

# Ensure proper permissions
RUN chown -R www-data:www-data /var/www && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Install PHP dependencies
RUN composer install --verbose --no-interaction --no-progress --ignore-platform-reqs

# Install Node.js dependencies (if needed for frontend builds)
RUN npm install --verbose --timeout=60000 && npm run build


# Expose port 8000
EXPOSE 8000

# Start PHP-FPM server
CMD ["php-fpm"]
