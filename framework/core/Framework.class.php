<?php

/**
 * Framework Core File
 */
class Framework
{
  public function __construct()
  {
    $this->boostrap();
    $this->autoload();
    $this->dispatch();
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

    define('CONTROLLER', $_REQUEST['c'] ?? 'Index');
    define('ACTION', $_REQUEST['a'] ?? 'index');
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

  private static function dispatch()
  {
    // Instantiate the controller class and call its action method

    $controller_name = CONTROLLER . "Controller";

    $action_name = ACTION;

    $controller = new $controller_name;

    $controller->$action_name();
  }
}
