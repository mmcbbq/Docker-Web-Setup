FROM httpd

RUN echo 'IncludeOptional /usr/local/apache2/conf/conf.d/*.conf' >> /usr/local/apache2/conf/httpd.conf  &&  \
    echo 'IncludeOptional /usr/local/apache2/conf/extra/httpd-vhosts.conf' >> /usr/local/apache2/conf/httpd.conf
COPY ./my-httpd.conf /usr/local/apache2/conf/conf.d/my-httpd.conf

COPY ./vhost.conf /usr/local/apache2/conf/extra/httpd-vhosts.conf