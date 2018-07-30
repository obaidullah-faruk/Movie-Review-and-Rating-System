
<?php
    session_start();
    include 'connection.php';

    $uname=$_POST['userName'];
    $pass=$_POST['password'];

    $sql="Select username FROM admin WHERE username='$uname' AND pass='$pass'";

    $result=mysqli_query($conn,$sql);

    if(!$row=mysqli_fetch_assoc($result)){
    	echo "Your User Name or Password is incorrect";
    }
    else{
    	$_SESSION['uid']=$row['uid'];
        header('Location:admin_navbar.html');
    }

?>