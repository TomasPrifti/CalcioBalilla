# Using Apache with PHP 8.2
FROM php:8.2-apache

# Enable module Apache mod_rewrite
RUN a2enmod rewrite

# Install dependencies
RUN apt-get update && \
	apt-get install -y \
	libzip-dev \
	unzip \
	git \
	default-mysql-client \
	npm

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql

# Copy the project inside the container
COPY . /var/www/html

# Execute commands
RUN cd /var/www/html && \
	composer install --no-dev --optimize-autoloader && \
	npm ci && \
	npm run build && \
	php artisan config:cache && \
	php artisan route:cache && \
	sed -i 's|DocumentRoot /var/www/html|DocumentRoot ${APACHE_DOCUMENT_ROOT}|' /etc/apache2/sites-available/000-default.conf

# Environment's variables
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
ENV APP_ENV production

# Expose port 80
EXPOSE 80

# Execute Apache
CMD ["apache2-foreground"]
