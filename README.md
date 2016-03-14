# Panopto Session Management PHP library

## Update
Install wsdl2phpgenerator:

```composer require wsdl2phpgenerator/wsdl2phpgenerator```

Fix some php:

```bash
sed -i 's/ guid\b/ string /g' *.php
sed -i 's/@\(\w\+\) \(\w\+\)SettingType\(|string\)\?/@\1 \2SettingType|string/' *.php
sed -i 's/@\(\w\+\) \(\w\+\)SortField\(|string\)\?/@\1 \2SortField|string/' *.php
sed -i 's/@\(\w\+\) SessionState\(\[\]\)\?\(|string\[\]\?\)\?/@\1 SessionState\2|string\2/' *.php
```

Manually add the Auth class to the Autoloader

## To use
```php
require_once 'PATH_TO_SRC_FOLDER/autoload.php';
```
