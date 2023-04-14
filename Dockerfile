FROM debian:buster

ENV DEBIAN_FRONTEND=noninteractive

WORKDIR /var/www/ai/

COPY . .

RUN apt update
RUN apt install apt-transport-https lsb-release ca-certificates wget -y
RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
RUN sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list'
RUN apt update
#RUN apt-get install -y apache2
RUN apt-get install -y php8.1
RUN apt-get install -y php8.1-cli
RUN apt-get install -y php8.1-simplexml
RUN apt-get install -y php8.1-curl
RUN apt-get install -y composer
RUN apt-get install -y php8.1-mysql
RUN composer install
RUN sed 's/DB_HOST=127.0.0.1/DB_HOST=mysql/' .env.example > .env
RUN php artisan key:generate
#RUN php artisan migrate
#RUN php artisan serve
#RUN cp apache.conf /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /var/www/ai

EXPOSE 8000
CMD ["/var/www/ai/start.sh"]
