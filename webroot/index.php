<?php
date_default_timezone_set('PRC');
require dirname(__DIR__) . '/src/bootstrap.php';

$di = new Xhgui_ServiceContainer();

$app = $di['app'];

require XHGUI_ROOT_DIR . '/src/routes.php';

$app->run();
