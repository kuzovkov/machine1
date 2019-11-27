#!/bin/sh

################################
# Install app #
################################

composer require phpmv/ubiquity-devtools
ln -s /var/www/html/vendor/phpmv/ubiquity-devtools/src/Ubiquity /usr/local/bin/Ubiquity
chmod a+x /usr/local/bin/Ubiquity
Ubiquity version
Ubiquity new app -a --themes=semantic,bootstrap,foundation

