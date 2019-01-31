<?php
define("APPLICATION_PATH", dirname(__FILE__));

$app = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap()->run(); // call bootstrap methods defined in Bootstrap.php