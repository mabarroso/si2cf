#!/bin/bash

echo selenium must be installed as /opt/selenium-server/selenium-server-standalone.jar

read -p "Press any key to continue... " -n1 -s

echo
echo
echo Create user and group


# create selenium user acct.
### TODO: fail if it exists, or delete & recreate
adduser --quiet --system --disabled-login --group \
  --gecos="Selenium2 Server User Account" \
  --home="/var/lib/selenium2" selenium2

echo Create /var/lib/selenium2
mkdir -p /var/lib/selenium2
chown -R selenium2:selenium2 /var/lib/selenium2

echo Create /etc/default/selenium2
cp selenium/etc_default_selenium2 /etc/default/selenium2

echo Create /etc/init.d/selenium2
cp selenium/etc_init.d_selenium2 /etc/init.d/selenium2
chmod +x /etc/init.d/selenium2

echo
echo Now you can use /etc/init.d/selenium2 start
echo
