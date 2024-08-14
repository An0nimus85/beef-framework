<?php

const VG_ACCESS = true;

header('content-Type:text/html;charset=utf-8');

session_start();

require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';

use \Core\base\exceptions\RouteException;
use \Core\base\controllers\RouteController;

try {
    RouteController::getInstance()->route();
}
catch (RouteException $e){
    exit($e->getMessage());
}