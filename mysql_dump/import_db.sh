#!/bin/sh
if [ ! -d "../mysql/$MYSQL_DATABASE" ]; then
  sudo docker exec -i  $mysql_container_name  sh -c "mysql -u$MYSQL_USER -p$MYSQL_PASSWORD -hlocalhost -e 'CREATE DATABASE  IF NOT EXISTS $MYSQL_DATABASE;'"
  echo "create database  $MYSQL_DATABASE "
fi

if [ ! -f "../mysql/$MYSQL_DATABASE/user.frm" ]; then
  sudo docker exec -i  $mysql_container_name  sh -c "mysql -u$MYSQL_USER -p$MYSQL_PASSWORD -hlocalhost -D $MYSQL_DATABASE < /mysql_dump/dump_$DYNAMIC_ENV_VAR.sql "
  echo "database mysql_dump/dump_$DYNAMIC_ENV_VAR.sql  imported successfuly into $MYSQL_DATABASE database"
fi
