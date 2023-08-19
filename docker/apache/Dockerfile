FROM httpd:2.4.33-alpine
RUN apk update; \
    apk upgrade;
RUN apk add curl
ARG SERVER_NAME
RUN sed -i '/LoadModule rewrite_module/s/^#//g' /usr/local/apache2/conf/httpd.conf && \
    sed -i 's#AllowOverride [Nn]one#AllowOverride All#' /usr/local/apache2/conf/httpd.conf
# Copy apache vhost file to proxy php requests to php-fpm container
COPY drive.conf /usr/local/apache2/conf/drive.conf
RUN echo "Include /usr/local/apache2/conf/drive.conf" \
    >> /usr/local/apache2/conf/httpd.conf



