<?php
class Loader
{
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
