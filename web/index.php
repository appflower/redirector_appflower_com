<?php
$url = 'www.appflower.com';
switch ($_SERVER['HTTP_HOST']) {
    case 'signup.appflower.com': $url = 'www.appflower.com/signup'; break;
}
header("Location: http://$url");
exit;
?>
