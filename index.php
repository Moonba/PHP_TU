<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<style>
body {
	background-image: url("img_3393.jpg");
}
a {
   text-decoration: none;
   color: orange;
   font-weight: 4em;
   font-size: 3em;
   }
   a:hover {
   text-decoration: underline;
   font-weight: 6em;
   font-size: 4em;
   }
</style>
</head>
<body>
<a href="page1.php">Page 1</a>
<a href="i/1234.php">Item page</a>
<?php 

include('visitor_tracking.php');

?>
</body>
</html>