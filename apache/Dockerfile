#Referencing Apache (httpd is the image name) and Alpine for OS
FROM httpd:2.4.33-alpine

#Update and upgrade the Alpine package manager
RUN apk update; \
    apk upgrade;

#Copy the demo.apache.conf into the apache directory
COPY demo.apache.conf /usr/local/apache2/conf/demo.apache.conf

#Include the demo.apache.conf inside of the httpd.conf (Apache) to add extra configurations
RUN echo "Include /usr/local/apache2/conf/demo.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf