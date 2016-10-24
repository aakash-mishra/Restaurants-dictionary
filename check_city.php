<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("aakashdb", $con);

$result = mysql_query("SELECT * FROM location where City='$_POST[mycity]'");
$row = mysql_fetch_array($result);
  if($row)
  {
	if($_POST['mycity']=="Mumbai" || $_POST['mycity']=="mumbai")
  header("Location: http://localhost/Restaurant/mumbaipage.html");
	if($_POST['mycity']=="Delhi" || $_POST['mycity']=="delhi")
	 header("Location: http://localhost/Restaurant/delhipage.html");	
  }
  else
  {
  echo "Sorry! We don't have a database for the city you entered..yet";
  }

mysql_close($con);
?> 