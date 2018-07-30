 <?php session_start();
    include 'connection.php';  
    include 'navloguser.html';
    ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>ShowAll</title>
</head>
<body>
   <?php

    $sql = "SELECT * FROM moviedetails";
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

   <footer>
       
       <div class="container">
     
  <h4 style="text-align: center; background-color: lightgrey; width: 100%;"> &copy; MD. Obaidullah Al-Faruk</h4>
       </div>
   </footer>
</body>
</html>