#I. Install 

```bash
git clone https://github.com/kuzovkov/machine1 sitename
cd sitename
sudo docker-compose build
sudo docker-compose up -d
```
#II. Checking and install framework

Open in browser [this url](http://localhost:8007/info.php).
You should see phpinfo table;

Run install `Ubiquity` script:
```bash
sudo docker-compose exec app ./install-app.sh

sudo chmod -R 777 vendor
sudo chmod -R 777 app
```
Open in browser [app url](http://localhost:8007).

For run console command:
```bash
sudo docker-compose exec app bash
cd app
```
and now you can execute commands (for example):
```bash
#create controller
Ubiquity controller DefaultController

Ubiquity init-cache

#show routes
Ubiquity info:routes

# create an action (sayHello) with a parameter (name), and the associated route (to)
Ubiquity action DefaultController.sayHello -p=name -r=to/{name}/

#create crud controllers and views
Ubiquity crud --resource=User --path=/users/
```
Read more in the [Documentation](https://micro-framework.readthedocs.io/).

#IIIManage database

Go to [http://localhost:8007/mydbdiffo/mydbdiffo.php](http://localhost:8007/mydbdiffo/mydbdiffo.php)
for manage you database. This tool allow you to create database from visual editor;

#IV Remove project files

```bash
sudo rm -rf app/*
cp docker/php/info.php app/info.php
sudo docker-compose stop
sudo docker-compose rm app
sudo docker-compose build
```
   