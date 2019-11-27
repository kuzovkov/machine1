#!/bin/sh

###############################
# Recovery database from dump #
###############################

DB_USER=user1
DB_PASS=userp@ssw0rd
DB_NAME=machine1
DUMP_NAME=init-db.sql

sudo docker-compose exec db mysql -u$DB_USER -p$DB_PASS -e "DROP DATABASE IF EXISTS $DB_NAME"
sudo docker-compose exec db mysql -u$DB_USER -p$DB_PASS -e "CREATE DATABASE IF NOT EXISTS $DB_NAME"
sudo docker-compose exec db sh -c "cat /dump/$DUMP_NAME | mysql -u$DB_USER -p$DB_PASS $DB_NAME"
