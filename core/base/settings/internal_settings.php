<?php
defined('VG_ACCESS') or die('Access denied');
const TEMPLATE = 'templates/default/';
const ADMIN_TEMPLATES = 'core/admin/views';
const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = '';
const  COOKIE_TIME = 60;
const BLOCK_TIME = 3;
const QTY =8;
const QTY_LINKS =3;
const ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => []
];
const  USER_CSS_JS =[
    'styles' => [],
    'scripts' => []
];

use \Core\base\exceptions\RouteException;

function autoloadMainClasses($class_nane)
{
    $class_nane = str_replace('\\','/',$class_nane);
    if (!@include_once $class_nane .'.php'){
        throw new RouteException('Не верное имя файла для подключения - '.$class_nane);
    }

}
spl_autoload_register('autoloadMainClasses');