<?php

require "autoload.php";

Loader::autoload();


$my_controller = new MyController();
echo $my_controller->run();
