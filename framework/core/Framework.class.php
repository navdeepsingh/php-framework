<?php

/**
 * Framework Core File
 */
class Framework
{
  public static function init()
  {
    self::boostrap();
    self::autoload();
  }

  private static function boostrap()
  {
    // Define Path Constants
    define("DS", DIRECTORY_SEPARATOR);

    define("ROOT", getcwd() . DS);

    define("FRAMEWORK_PATH", ROOT . "framework" . DS);

    define('CONTROLLER_PATH', ROOT . 'controllers' . DS);
    define('MODEL_PATH', ROOT . 'models' . DS);
    define('VIEW_PATH', ROOT . 'views' . DS);
  }

  public static function autoload()
  {
    spl_autoload_register(array(__CLASS__, 'load'));
  }

  private static function load($classname)
  {
    if (substr($classname, -10) == 'Controller') {
      require_once  "controllers/$classname.class.php";
    }
  }
}
