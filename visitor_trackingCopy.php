<!--include('visitor_tracking.php'); in every page that we need to track results for--> 

<?php
require_once('visitors_connections.php');
//get the required data
$visitors_ip = $_SERVER['REMOTE_ADDR'];
$visitors_browser_agent = $_SERVER['HTTP_USER_AGENT'];
$visitors_refferer = $_SESSION["origURL"];

$visited_page = $_SERVER['REQUEST_URI'];
$customer_key = $_SESSION["origKEY"]; 

if ($visitors_refferer != '') {
	// ex : http://morecon.jp/i/1103/ref?00000
	$product_id = substr ($visited_page,-14,-3);
	$customer_key = substr($visited_page,-5);	
	}
else
	{
	$product_id = substr ($visited_page,-4);
	$customer_key = '';	
	}
	
$query = "INSERT INTO dtb_visitors (visitors_ip, visitors_refferer, visited_page, visitors_browser_agent) VALUES ('$visitors_ip', '$visitors_refferer', '$visited_page', '$visitors_browser_agent')";

echo "<pre>Debug: $query</pre>";
echo "</br>";

$q=mysqli_query($conn, $query);

if ( false===$q ) {
  printf("error: %s\n", mysqli_error($conn));
	}
else {
  echo 'done.';

	}

function rightstr ()

?>