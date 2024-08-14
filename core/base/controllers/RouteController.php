<?php

namespace Core\base\controllers;
use \Core\base\settings\Settings;
class RouteController
{
    static private RouteController $_instance;

    private function __clone()
    {
    }
    static public function getInstance(): RouteController
    {
      if (self::$_instance instanceof self){
          return self::$_instance;
      }
      return self::$_instance = new self;
    }
    private function __construct()
    {

    }
}