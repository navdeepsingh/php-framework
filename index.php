<?php

require "framework/core/Framework.class.php";
// Initialize the framework 
new Framework();

// Initialize DB
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'password';
$db_name = 'lumen_motul';

$model = new Model($db_host, $db_username, $db_password, $db_name);
$qrcodes = $model->get_all_posts();

foreach ($qrcodes as $qrcode) {
	echo $qrcode['id'];
}



