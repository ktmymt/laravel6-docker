FROM mysql:8.0

ENV TZ=UTC \
  MYSQL_DATABASE=local \
  MYSQL_USER=test \
  MYSQL_ROOT_PASSWORD=secret \
  MYSQL_PASSWORD=password

COPY ./my.cnf /etc/my.cnf
