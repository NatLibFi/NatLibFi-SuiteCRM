FROM ubuntu:trusty

RUN apt-get update && apt-get install -y software-properties-common
RUN apt-get install -y apache2 curl
RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php && apt-get update && apt-get install -y php5.6 php5.6-mysql php5.6-xml php5.6-mbstring php5.6-gd php5.6-zip php5.6-imap php5.6-curl libapache2-mod-php5.6

RUN a2enmod php5.6

WORKDIR /var/www/html/suitecrm

ADD . /var/www/html/suitecrm

EXPOSE 80

CMD apachectl -D FOREGROUND
