<?php // Connecting to database...

define("DB_SERVER", "localhost");
define("DB_USER", "ENTER_USERNAME_HERE");
define("DB_PASS", "ENTER_PASSWORD_HERE");
define("DB_NAME", "what");



$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

//test if connection occured

if (mysqli_connect_errno()) {
	die("Database connection Failed : ". mysqli_connect_error() . " (". mysqli_connect_errno()." )" );
}



?>