<?php
 /*
 *  PHP Lib Block CSRF Attempt.
 *  ********************************
 *  Test File.
 *  ********************************
 */
 
require_once('CSRF.php');
$CSRF = new CSRF();
if(isset($_POST['submit']))
	echo $CSRF->checkToken($_POST['token']) ? /* Request accepted */ "Validate token." : /* Request denied */ "Bad token.";

?>
<DOCTYPE html>
<html lang="en" xmlns="//www.w3.org/1999/xhtml">
    <head>
	    <meta charset="utf-8">
	    <title>Test File</title>
	</head>
	<body style="text-align: center;">
		<form method="POST">
			<input type="text" name="token" value="<?php echo $CSRF->getToken(); ?>"/>
			<input type="submit" name="submit" value="Check"/>
		</form>
	</body>
</html>