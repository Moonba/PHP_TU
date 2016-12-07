<?php 
session_start();

$hostname = "localhost";
$database = "DB_name";
$username = "";
$password = "";

// Create connection
$conn=mysqli_connect($hostname,$username,$password,$database);

if ( !isset( $_SESSION["origURL"] ) ) {
    $_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];
}

if ( !isset( $_SESSION["origKEY"])) {
	$uri = $_SERVER['REQUEST_URI'];
	$_SESSION["origKEY"] = substr($uri,-5);	

}

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	echo '</br>';
}

?>