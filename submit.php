


<?php 
   include 'connection.php';
   
          $firstname=$_POST['firstName'];
          $lastname=$_POST['lastName'];
          $gen=$_POST['gender'];
          $birthdate=$_POST['dob'];
          $email=$_POST['email'];
          $username=$_POST['userName'];
          $pass=$_POST['password'];


          $sql="INSERT INTO user(firstname,lastname,gen,birthdate,email,username,pass)
          VALUES('$firstname','$lastname','$gen','$birthdate','$email','$username','$pass')";

          if(mysqli_query($conn,$sql)){
          	echo "Registration successful";
          	header('location:index.php');
          }
          else{
          	echo "Error" . mysqli_error($conn);
          }
          mysqli_close($conn);

?>