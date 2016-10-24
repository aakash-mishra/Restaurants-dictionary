<html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="aakashdb";
if (isset($_POST["name"]))
$name=$_POST["name"];
if (isset($_POST["email"]))
$mail=$_POST["email"];
if (isset($_POST["review"]))
$review=$_POST["review"];
if (isset($_POST["id"]))
$id=$_POST["id"];

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "INSERT INTO reviews (Name, Email,Review,R_id)
VALUES ('$name', '$mail', '$review', '$id')";
if ($conn->query($sql) === TRUE) {
   echo '<script type="text/javascript">alert("Review added.");</script>';
    echo '<script type="text/javascript">window.history.go(-3) ;</script>';
	
	//echo"<a href='javascript:window.location = document.referrer;'>Click here to refresh and view changes</a>.<br />";
	
}

?>
</html>

