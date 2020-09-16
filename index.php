<?php

require "framework/core/Framework.class.php";
// Initialize the framework 
new Framework();

$myObject = new MyController();
$myObject->run();
