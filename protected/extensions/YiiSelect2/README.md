yii-select2
===========

[select2](http://ivaynberg.github.com/select2/) extension for [YII](http://www.yiiframework.com/).

Usage:

In the view you want to use YiiSelect2
```php
<?php $this->widget('ext.YiiSelect2.YiiSelect2', $options ?>

```

Where options can be:

* target - jQuery elements to be matched
* debug - Boolean. Whether to include minified JS file or regular
* options - Hash. Native options to pass through to select2
* scriptPosition - This can be one of the CClientScript::POS_* constants. Defaults to
  CClientScript::POS_END.
