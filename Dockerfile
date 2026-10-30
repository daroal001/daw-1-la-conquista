FROM php:8.1-apache

RUN pecl install -f xdebug \
&& echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.mode=develop,debug" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.discover_client_host = 0" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/xdebug.ini


RUN touch /usr/local/etc/php/php.ini 
RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.client_host = 127.0.0.1" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.client_port = 9003" >> /usr/local/etc/php/php.ini
RUN echo "xdebug.start_with_request=trigger" >> /usr/local/etc/php/php.ini