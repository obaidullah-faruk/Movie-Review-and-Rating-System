
<?php 
session_start(); 
include 'navbar.html';
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Search</title>

  </head>
  <body>
       <?php   
       $var=$_POST['sea.sear'];


 $sql = "SELECT * FROM moviedetails where moviename='$var' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    echo '<table class="table table-hover">
    <tr>
       <th>Movie Name</th>
       <th>Year</th>
       <th>Language</th>
       <th>Duration Name</th>
       <th>Genre</th>
       <th>Director</th>
       <th>Stars</th>
       <th>Summary</th>
       <th>Average </th>
       <th>Rate</th>
    </tr> ';
    while($row = mysqli_fetch_assoc($result)) {
$mname = $row["moviename"];
          echo " <tr>";
                    echo "<td>";
                    echo "<b>" .$row["moviename"] . "</b>";
                    echo "</td>";
                   echo "<td>"; echo $row["year"]; echo "</td>";
                    echo "<td>"; echo $row["language"]; echo "</td>";
                  echo "<td>"; echo  $row["duration"]; echo "</td>";
                   echo "<td>"; echo $row["genre"]; echo "</td>";
                  echo "<td>";  echo $row["director"]; echo "</td>";
                  echo "<td>";  echo $row["stars"]; echo "</td>";
                 echo "<td>";  echo $row["summary"]; echo "</td>";
                 $avg = "SELECT avg(rating) as avg from rating where moviename='$mname'";
                 $answer = mysqli_fetch_assoc(mysqli_query($conn,$avg));
                 echo '<td>'.round($answer["avg"],2).'</td>';
        echo "<td>";
        if(isset($_SESSION["username"])){
             echo '<form method="POST" class="form-group" action="rating.php?id='.$row["moviename"].'&uname='.$_SESSION["username"].'">
                <select name="rating" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
         <input type="submit" name="rate" value="Rate" class="btn btn-sm "/>
         </form>';
       }
       else{echo "Login to rate";}
         echo "</td>"; echo " </tr>";
       
    }
    echo " </table>";
} else {
    echo "0 results";
}

mysqli_close($conn);

       ?>

       </body>
       </html>