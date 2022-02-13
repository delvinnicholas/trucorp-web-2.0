# 2301852581 - Delvin Nicholas
# Dockerfile UAS Server Admin
# Pull mysql for webserver
FROM mysql
# Copy File
COPY trucorp-db.sql /docker-entrypoint-initdb.d/
# Config MYSQL
ENV MYSQL_DATABASE=trucorp-db
ENV MYSQL_ROOT_PASSWORD=secret
