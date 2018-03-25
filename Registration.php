<?php 
$host='localhost';
$user='root';
$Pasword='';
$dbname='mycafe';
$x=mysqli_connect($host,$user,$Pasword,$dbname) or die("Not Connected"); 
mysqli_select_db($x,$dbname) or die("Not Connectedi");

if (isset($_POST['submit'])) {
  $name=$_POST['name']; 
  $email=$_POST['email'];
  $psw=$_POST['password'];

mysqli_query($x,"insert into cafe(name,email,password) values ('$name','$email','$psw')");
header('Location: http://localhost/web/login.php');
}
   
?>






<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
<div class="avatar">
  <img src="Images/coffee1.jpg" class="logo">
  <h1>SignUp Here</h1>
  <form method="post" action="">
    <p>Name</p>
    <input type="text" placeholder="Enter Name" name="name" required>
    <p>E-mail</p>
    <input type="E-mail" name="email" placeholder="Enter E-mail" required>
    <p>Password</p>
    <input type="Password" name="password" placeholder="Enter Password" required>
    
    <button class="hello" type="submit" name="submit" >submit</button><br>
  </form>
</div>
</body>
</html>