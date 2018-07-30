
<?php 

include 'connection.php';
include 'admin_navbar.html';

?>

<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>User List</title>
</head>
<body>

   <?php

		$sql = "SELECT * FROM user";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {

			 echo '<table class="table table-hover">
    <tr>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Gender</th>
       <th>Birthdate</th>
  
       <th>Email</th>
       <th>Username</th>
  
    </tr> ';
		   
		    while($row = mysqli_fetch_assoc($result)) {
		        echo " <tr>";
                    echo "<td>";
                    echo "<b>" .$row["firstname"] . "</b>";
                    echo "</td>";
                   echo "<td>"; echo $row["lastname"]; echo "</td>";
                    echo "<td>"; echo $row["gen"]; echo "</td>";
                  echo "<td>"; echo  $row["birthdate"]; echo "</td>";
                   echo "<td>"; echo $row["email"]; echo "</td>";
                  echo "<td>";  echo $row["username"]; echo "</td>";
  
		    }
		} else {
		    echo "0 results";
		} echo " </tr>";

		mysqli_close($conn);
?>

   <footer>
       
       <div class="container">
     
  <h4 style="text-align: center; background-color: lightgrey; width: 100%;"> &copy; MD. Obaidullah Al-Faruk</h4>
       </div>
   </footer> 

</body>
</html>