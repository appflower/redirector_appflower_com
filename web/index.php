<?php
$url = 'www.appflower.com';
switch ($_SERVER['HTTP_HOST']) {
    case 'signup.appflower.com: $url = 'beta.appflower.com/cms/demoRegistration'; break;
}
header("Location: http://$url");
exit;
?>
