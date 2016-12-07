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

<?php 
session_start();

$db = new PDO('mysql:host=localhost;dbname=morecon;charset=utf8mb4', 'root', 'spark', array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$username = isset($_GET['user']) ? $_GET['User'] : 'Nobody' ;
$username = $_GET['user'] ?? 'Nobody' ;

//php7
$_SESSION["origURL"] = $_SESSION["origURL"] ?? $_SERVER["HTTP_REFERER"];

//php7?
$_SESSION["origKEY"] = $_SESSION["origKEY"] ?? substr($_SERVER['REQUEST_URI'],-5);	

// closing php tag is prohibited in php7 "" ? > ""