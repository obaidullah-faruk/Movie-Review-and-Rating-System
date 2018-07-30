<?php
session_start();
include "connection.php";
if(isset($_POST["rate"])){
	$movieName = $_GET["id"];
	$userName = $_GET["uname"];
	$rating = $_POST["rating"];
	$rate = "insert into rating(moviename,username,rating) values('$movieName','$userName','$rating')";
	//echo $rate;
	$result = mysqli_query($conn,$rate);
	if($result){
		header("Location:showall.php");
	}
	else{
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Rate</title>
</head>
<body>

</body>
</html>