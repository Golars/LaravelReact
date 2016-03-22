#!/usr/bin/env bash
export DEBIAN_FRONTEND=noninteractive
export LC_ALL=en_US.UTF-8
export LANG=en_US.UTF-8

# sudo aptitude --help
# -y             Assume that the answer to simple yes/no questions is 'yes'.
# -f             Aggressively try to fix broken packages.
# -q             In command-line mode, suppress the incremental progress indicators.
sudo aptitude update -q
apt-get -y update
add-apt-repository ppa:ondrej/php5-5.6
apt-get -y update
sudo aptitude install -q -y -f php5-cli php5-curl php5-gd
sudo apt-get -y upgrade php5-fpm

sudo apt-get install php-pear
sudo pecl search xdebug
sudo echo "zend_extension=/usr/lib/php5/20131226/xdebug.so" >>/etc/php5/fpm/php.ini
sudo service php5-fpm restart