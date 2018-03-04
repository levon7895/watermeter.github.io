<?php 
require "libs/rb-mysql.php";
	R::setup( 'mysql:host=localhost;dbname=watermeter',
        'root', '' );

	session_start();
 ?>