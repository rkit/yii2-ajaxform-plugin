# Guide

## Usage

```js
$('.ajax-form').yiiAjaxForm({
  beforeSend: function() {},
  error: function() {},
  complete: function() {},
  success: function(data) {},
});
```
> available [$.ajax options](http://api.jquery.com/jquery.ajax)

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
