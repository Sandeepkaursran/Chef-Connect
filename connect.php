<?php
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age =$_POST['age'];
$gender = $_POST['gender'];
$chefs =$_POST['chefs'];

$conn = new mysqli("localhost", "root","","chefconnect");
if ($conn->connect_error) {
    die("Connection failed: " . " Cannot connect to database");
  }
$INSERT = "INSERT Into chefconnects (f_name, l_name, email, password, age, gender, chefs) 
values('$f_name', '$l_name', '$email', '$password', '$age', '$gender', '$chefs')";
if ($conn->query($INSERT) === TRUE) {
    echo "<body background='chef.webp' style='background-size: cover;'><center ><h1 style='margin: 22%; padding: 8%; background-color: lightgreen;'>Registration successful<h1><center></body>";
	} 
else {
         echo "<body background='chef.webp' style='background-size: cover;'><div style='margin: 17%; padding: 8%; background-color: red;'><center><h1>Error:</center></h1> " ."<center><h1>Username already exists</center></h1>" . "<br>" ."<center><h1>Try with another Username</center></h1></div></body>";
    }    
$conn->close();
?>
