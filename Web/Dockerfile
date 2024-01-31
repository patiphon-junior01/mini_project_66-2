FROM php:7.4-apache
COPY ./  /var/www/html/
RUN docker-php-ext-install mysqli
RUN echo "serverName localhost" >> /etc/apache2/apache2.conf
RUN docker-php-ext-install pdo pdo_mysql
# Set HttpOnly flag for Session
RUN echo "php_value session.cookie_httponly 1" >> /usr/local/etc/php/conf.d/docker-php-ext-session.ini
# Set Secure flag for Session
RUN echo "php_value session.cookie_secure 1" >> /usr/local/etc/php/conf.d/docker-php-ext-session.ini
EXPOSE 80 