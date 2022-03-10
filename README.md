Assets icons for Yii PHP Framework
==================================================================
Assets icons for Yii PHP Framework

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```shell
composer require thtmorais/yii2-icons "*"
```

or add

```json
"thtmorais/yii2-icons": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

Feather icons use:

```php
<?php

use thtmorais\icons\FeatherIconsAsset;

FeatherIconsAsset::register($this);
FlagIconsAsset::register($this);

?>
```

You can preview all Feather icons [here](https://feathericons.com/).

You can preview all Flag icons [here](https://flagicons.lipis.dev/).