# for dev
#! /bin/bash

path="/var/www/html"

chmod -R 755 $path/storage $path/bootstrap/cache
chgrp -R www-data $path/storage $path/bootstrap/cache
chmod -R ug+rwx $path/storage $path/bootstrap/cache

chown -R aleksiyd:www-data $path
chown -R www-data:www-data $path/storage $path/bootstrap/cache $path/public

find $path -type f -exec chmod 644 {} \;
find $path -type d -exec chmod 755 {} \;