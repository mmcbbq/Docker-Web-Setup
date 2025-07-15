FROM ubuntu/bind9
LABEL authors="M.Martinez"

COPY bbq-web.zz.fwd /var/lib/bind/bbq-web.fwd
COPY named.conf.docker-zones /etc/bind/named.conf.docker-zones
RUN echo 'include "/etc/bind/named.conf.docker-zones";' >> /etc/bind/named.conf