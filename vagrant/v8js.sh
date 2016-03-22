#!/usr/bin/env bash

sudo apt-get install -y php5-dev php-pear libv8-dev build-essential
sudo pecl install v8js -y
sudo echo extension=v8js.so >>/etc/php5/cli/php.ini
sudo echo extension=v8js.so >>/etc/php5/fpm/php.ini
sudo apt-get install -y node
sudo apt-get install -y npm
sudo ln -s /usr/bin/nodejs /usr/bin/node
sudo npm install -g n
sudo npm cache clean -f
sudo n stable
sudo pecl install v8js-0.1.3
sudo service php5-fpm restart