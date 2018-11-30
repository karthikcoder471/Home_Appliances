<?php
   

$servername = "localhost";
$username = "root";
$password = "";
$dbName="home_appliances";
error_reporting(E_ALL ^ E_DEPRECATED);
// Create connection
$link = mysqli_connect($servername,$username,$password);
		mysqli_select_db($link,$dbName);
// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

function mysqli_prep($value)
    {
        $magic_quotes_active = get_magic_quotes_gpc();

        $new_enough_php = function_exists("mysqli_real_escape_string"); // i.e. PHP >= v4.3.0

        if ($new_enough_php) { // PHP v4.3.0 or higher
            // undo any magic quote effects so mysql_real_escape_string can do the work

            if ($magic_quotes_active) {
                $value = stripslashes($value);
            }

            $value = mysqli_real_escape_string($value);

        } else { // before PHP v4.3.0
            // if magic quotes aren't already on then add slashes manually

            if (!$magic_quotes_active) {
                $value = addslashes($value);
            }

            // if magic quotes are active, then the slashes already exist

        }
		
		return $value;
	}


?>
