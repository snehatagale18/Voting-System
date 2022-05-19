FROM 656079788318.dkr.ecr.us-east-1.amazonaws.com/fpm-7.4:latest

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl



# # Install composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# RUN composer --version

# Copy existing application directory contents
COPY . /var/www
 
# Copy existing application directory permissions
RUN chown www-data:www-data /var/www 

COPY --chown=www-data:www-data . /var/www 

# # Change current user to www
USER www-data

# RUN composer update

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]