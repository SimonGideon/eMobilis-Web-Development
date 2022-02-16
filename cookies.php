<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (860400 * 30), "/"); //86400 = 1day
?>
<html>
    <body>
        <?php
        if(!isset(&_COOKIE[$cookie_name)){
            echo "Cookie named '". $cookie_name ."' is not set!";
        } else{
            echo "Cookie '" . $cookie_name . "' is set!<br>";
        }
        ?>
    </body>
</html>
