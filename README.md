# yii2-ajaxform-plugin

This is the plugin used by the yii\widgets\ActiveForm widget

## Installing using Composer

```
composer require rkit/yii2-ajaxform-plugin
```

Then, register asset
```
rkit\yii2\plugins\ajaxform\AjaxFormAsset::register($this);
```

## Installing using NPM
```
npm install yii2-ajaxform-plugin --save
```

Then, add the module

```
require('yii2-ajaxform-plugin');
```

## Usage

```js
$('.ajax-form').yiiAjaxForm({
    beforeSend: function() {},
    error: function() {},
    complete: function() {},
    success: function() {},
  });
```

You can access to the form and button that caused the the form submit event
```js
var $form = $(this);
var $button = $(this).data('yiiActiveForm').submitObject;
```

You can invoke validation method
```js
$(this).yiiActiveForm('updateMessages', data);
```

## Example

```js
$('.ajax-form').yiiAjaxForm({
    beforeSend: function() {
      var $button = $(this).data('yiiActiveForm').submitObject;
      if ($button) {
        $button.prop('disabled', true);
      }
    },
    complete: function() {
      var $button = $(this).data('yiiActiveForm').submitObject;
      if ($button) {
        $button.prop('disabled', false);
      }
    },
    success: function(data) {
      if (data.redirect) {
        document.location.href = data.redirect;
      } else if (data.reload) {
        location.reload(true);
      }
      // show validation error messages
      $(this).yiiActiveForm('updateMessages', data);
    },
  });

```
