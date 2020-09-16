<?php

class IndexController
{
  public function index()
  {
    echo $_SERVER['REQUEST_URI'] . '<br>';
    print_r($_GET);
    echo "Running from Index Controller";
  }
}
