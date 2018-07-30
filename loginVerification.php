
<?php 
    include 'connection.php';

    $uname=$_POST['userName'];
    $pass=$_POST['password'];

    $sql="Select * FROM user WHERE username='$uname' AND pass='$pass'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==0){
    	echo "Your User Name or Password is incorrect";
    }
    else{
        session_start();
    	$_SESSION['username']= $uname;
        header("Location:indexUser.php");
    }

?>