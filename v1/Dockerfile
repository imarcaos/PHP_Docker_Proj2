FROM php:8.2-apache
# linha abaixo remove um erro do servidor apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf  
RUN docker-php-ext-install pdo pdo_mysql mysqli
EXPOSE 80