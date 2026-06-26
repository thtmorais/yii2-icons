Assets icons for Yii PHP Framework 2
---

Installation
---

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```shell
composer require thtmorais/yii2-icons "*"
```

or add

```
"thtmorais/yii2-icons": "*"
```

to the require section of your `composer.json` file.


Usage
---

Once the extension is installed, simply use it in your code by  :

Feather Icons use:

```php
<?php

use thtmorais\icons\FeatherIconsAsset;

FeatherIconsAsset::register($this);

?>
```

You can check all details about Feather Icons [here](https://github.com/feathericons/feather).

Flag Icons use:

```php
<?php

use thtmorais\icons\FlagIconsAsset;

FlagIconsAsset::register($this);

?>
```

You can check all details about Flag Icons [here](https://github.com/lipis/flag-icons).

Keyboard Key Icons use:

```php
<?php

use thtmorais\icons\KeyboardKeyIconsAsset;

KeyboardKeyIconsAsset::register($this);

?>
```

You can check all details about Keyboard Key Icons [here](https://github.com/thtmorais/keyboard-key-icons).
