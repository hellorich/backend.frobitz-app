#!/bin/bash

# Create wp-config file
wp config create --dbname=wordpress --dbuser=wordpress --dbpass=wordpress --dbhost=database --path='/app/app'

# Set up Multisite
wp core multisite-install --path='/app/app' --url='frobitz-app.lndo.site' --admin_user='admin' --admin_password='admin' --admin_email='frobitz@gmail.com' --title='Test' --skip-email