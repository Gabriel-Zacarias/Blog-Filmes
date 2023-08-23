# Blog-Filmes

# Created by https://www.toptal.com/developers/gitignore/api/laravel,composer
# Edit at https://www.toptal.com/developers/gitignore?templates=laravel,composer

### Composer ###
composer.phar
/vendor/

# Commit your application's lock file https://getcomposer.org/doc/01-basic-usage.md#commit-your-composer-lock-file-to-version-control
# You may choose to ignore a library lock file http://getcomposer.org/doc/02-libraries.md#lock-file
# composer.lock

### Laravel ###
node_modules/
npm-debug.log
yarn-error.log

# Laravel 4 specific
bootstrap/compiled.php
app/storage/

# Laravel 5 & Lumen specific
public/storage
public/hot

# Laravel 5 & Lumen specific with changed public path
public_html/storage
public_html/hot

storage/*.key
.env
Homestead.yaml
Homestead.json
/.vagrant
.phpunit.result.cache

# End of https://www.toptal.com/developers/gitignore/api/laravel,composer
