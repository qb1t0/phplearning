#!/usr/bin/env bash

# check if PHP is installed
php -v > /dev/null 2>&1
PHP_IS_INSTALLED=$?

# check if HHVM is installed
hhvm --version > /dev/null 2>&1
HHVM_IS_INSTALLED=$?

[[ $HHVM_IS_INSTALLED -ne 0 && $PHP_IS_INSTALLED -ne 0 ]] && { printf "!!! PHP/HHVM is not installed.\n    Installing Composer aborted!\n"; exit 0; }


if [[ $PHP_IS_INSTALLED -ne 0 ]]; then
    echo ">>> Installing PHP"
    curl -s http://php-osx.liip.ch/install.sh | bash -s 7.2
else
    echo ">>> Updating PHP"
    PHPVER=$(php -v | sed 2,4d)
    printf "PHP Version: %s\n" "${PHPVER}"
fi

# check if composer is installed
composer -v > /dev/null 2>&1
COMPOSER_IS_INSTALLED=$?

# true, if composer is not installed
if [[ $COMPOSER_IS_INSTALLED -ne 0 ]]; then
    echo ">>> Installing Composer"
    # install Composer
    curl -sS https://getcomposer.org/installer | php
    sudo mv composer.phar /usr/local/bin/composer
else
    echo ">>> Updating Composer"
    if [[ $HHVM_IS_INSTALLED -eq 0 ]]; then
        sudo hhvm -v ResourceLimit.SocketDefaultTimeout=30 -v Http.SlowQueryThreshold=30000 -v Eval.Jit=false /usr/local/bin/composer self-update
    else
        composer self-update
    fi
fi
