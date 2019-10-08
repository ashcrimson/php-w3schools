<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . " ' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Vaue is: " . $_COOKIE[$cookie_name];
}
?>

<p><strong>Note:</strong>You might have to reload the page to see the cookie</p>    
</body>
</html>