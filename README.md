# yii2-ajaxform-plugin

A simple plugin for ajax forms.  
The plugin for use with the [yii\widgets\ActiveForm](http://www.yiiframework.com/doc-2.0/yii-widgets-activeform.html)

## Installing using Composer

```
composer require rkit/yii2-ajaxform-plugin
```

Then, register asset
```php
rkit\yii2\plugins\ajaxform\Asset::register($this);
```

## Installing using NPM
```
npm install yii2-ajaxform-plugin --save
```

Then, add the module

```js
require('yii2-ajaxform-plugin');
```

## Documentation

[Guide](/guide)

## Development

### Coding Standard

- PHP Code Sniffer — [phpcs.xml](./phpcs.xml)
- ESLint — [.eslintrc](./.eslintrc)
