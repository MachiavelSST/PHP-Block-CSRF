# PHP-Block-CSRF

## Requirements
PHP version 5.x (+) is required for running this.

## Features
- Block CSRF Attempt.

## Integration (PHP side) #1
```php
require_once('CSRF.php');
$CSRF = new CSRF();

if(isset($_POST['submit'])){
	switch($CSRF->checkToken($_POST['token'])){
 		case false:
			/* Your code, if the token is bad. */
			echo "Request denied.";
		break;
		default:
			/* Your code, if the token is valid. */
			echo "Request allowed.";
		break;
	}
}
```

## Integration (HTML side) #2
```html
<form method="POST">
	<input type="text" name="token" value="<?php echo $CSRF->getToken(); ?>"/>
	<input type="submit" name="submit" value="Check"/>
</form>
```
