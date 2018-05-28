# Blog API Backend
## Introduction
Blog API Server provides a web data interface
for both web & admin dashboard.
## Version
- PHP >=7.1.3 
- Lumen (5.6.3) 
- MongoDB v3.6.5
- Dingo 
## installation
OSX

- Install mongodb
```
>> brew update
>> brew install mongodb
>> brew services start mongodb
```
- Install composer
```
>> php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
>> php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
>> php composer-setup.php
>> php -r "unlink('composer-setup.php');"
```
- Install PHP
```
>> brew remove --force --ignore-dependencies httpd
>> brew remove --force --ignore-dependencies php70-xdebug php71-xdebug
>> brew remove --force --ignore-dependencies php70-imagick php71-imagick
brew remove --ignore-dependencies --force php70 php71 php72
>> brew install homebrew/core/php
```
- Install Pear
```
>> curl -O  http://pear.php.net/go-pear.phar
>> php -d detect_unicode=0 go-pear.phar
>> Press Enter to use default setting
>> Press Y Enter to update php.ini include path
```
- Install Mongo PHP Driver
```
>> pecl install mongodb
```
- Install Valet
```
>> composer global require laravel/valet
>> valet install
```
- Install PHP package
```
>> composer install
```
## Valet Configuration
The API server can be deployed on OSX with [Valet](https://laravel.com/docs/5.6/valet).
```
>> cd api
>> valet link api
>> valet secure api
```
Open your browser and go to  https://api.test