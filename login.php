<?php 
$host='localhost';
$user='root';
$Pasword='';
$dbname='mycafe';
session_start();
$x=mysqli_connect($host,$user,$Pasword,$dbname) or die("Not Connected"); 
mysqli_select_db($x,$dbname) or die("Not Connected");

if (isset($_POST['submit'])) {
    $uname=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from cafe where email='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($x,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        $_SESSION['email']=$uname;
        header('Location: http://localhost/web/loginsuccess.html');
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
       
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="loginbox">
	
	<img src="Images/coffee1.jpg" class="avatar">
	<h1>Login Here</h1>
	<form method="post" action="">
		
		<p>E-mail</p>
		<input type="E-mail" name="email" placeholder="Enter E-mail">
		<p>Password</p>
		<input type="Password" name="password" placeholder="Enter Password">
		<input type="submit" name="submit" value="Login"><br>
		<a href="#">Lost your password</a><br>
		<a href="Registration.php">Don't have an account</a>
	</form>
</div>
</body>
</html>