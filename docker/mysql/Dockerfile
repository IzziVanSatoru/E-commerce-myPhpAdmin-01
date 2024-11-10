FROM mysql:5.7

ENV MYSQL_ROOT_PASSWORD=password
ENV MYSQL_DATABASE=ecommerce

COPY init_db/init.sql /docker-entrypoint-initdb.d/
EXPOSE 3306
