# Image resize fix introduced in 2.1.6

Bug fix for images are displayed with incorrect size.

Installation via composer:

```
composer require "piotrkwiecinski/magento2-module-image-resize-fix: 0.1.0"
```

Run from Magento 2 root directory:

for enable module:

```
php -f bin/magento module:enable PiotrKwiecinski_ImageResizeFix
```

for update system:
```
php -f bin/magento setup:upgrade
```
