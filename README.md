MobileDetectComponent
=====================

Mobile devices detecting with Mobile_Detect.

Installation and configuration
------------------------------
Install Mobile_Detect via composer.

Copy component to `extensions/mobile-detect-component` directory located inside your application and add it to the
application configuration the following way:

```php
<?php
return array(
...
	'components'=>array(
		...
		'mobileDetect'=>array(
			'class'=>'ext.mobile-detect-component.MobileDetectComponent',
		),
		...
	),
...
);
```

Usage example
-------------

```php
<?php
Yii::app()->mobileDetect->isMobile();
```
