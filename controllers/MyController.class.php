<?php

class MyController
{
  public function run()
  {
    echo $_SERVER['REQUEST_URI'] . '<br>';
    print_r($_GET);
    echo "Running from MyController";
  }
}
