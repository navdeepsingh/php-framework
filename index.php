<?php

require "framework/core/Framework.class.php";

Framework::init();


$myObject = new MyController();
$myObject->run();
