<?php
$username=$_POST['email'];
$password=$_POST['password'];
$conn = new mysqli("localhost", "root","","chefconnect");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$SELECT="Select f_name, l_name, email,age, gender, chefs from chefconnects where email='$username' AND password='$password'";

$output = $conn->query($SELECT);

if ($output->num_rows > 0) {
  // output data of each row
  while($row = $output->fetch_assoc()) {
    //echo "Welcome " . $row["f_name"]." ".$row["l_name"];
    echo "<html>
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <style>
        .container{
            background:cyan;
        }
        button {
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 50%;
      }
            img.a {
  border-radius: 50%;
}
            .main {
            width: 68%;
            padding :16px;
            border: 2px solid gray;
            margin-left: 0%;
            margin-top: 0;
            border-radius: 50%;
            background: cornsilk;
        }
        .column {
    float: left;
    }
        .row{
            margin-left:15%;
        }
        .left{
              width: 20%;
            border: 2px solid gray;
            height: 500px;
            border-radius: 5%;
            background: cornsilk;
        }
        .right{
            width: 62%;
            border: 2px solid gray;
            height: 500px;
            border-radius: 5%;
            background: cornsilk;
        }
        p{
            padding-left: 7%;
        }
        </style>
    </head>
    <body class='container'>
    <center>
        <div class='main'>
            <div>
            <center><h3>Chef &nbsp;<img src='Connect.png'>&nbsp;Connect</h3></center>
            </div>
        </div>
        <div class='row'>
       
            <div class='column left'>
               
                <img src='profile.png' clas='a' alt='Profile Picture'alt='Avatar' '/>
                <p style='padding: top 30px;'><a href='main.html'> <button type='button'>Logout</button></a></p>
                <p style='padding: top 30px;'><a href='#'> <button type='button'>Account</button></a></p>
           
            </div>
            <div class='column right'>
                <br>
                <p style='display: block; font-size: larger; margin-left:30px ; '> 
                
                First Name :{$row['f_name']}<br><br>
                Last Name :{$row['l_name']}<br><br>
                Email :{$row['email']}<br><br>
                Gender :{$row['gender']}<br><br>
                Types of Chef :{$row['chefs']}<br><br>
                

          
               
                </p>

            </div>
        </div>
        </div>
        </center>
    </body>
</html>";
    
  }
} else {
  echo "<p style='padding:50px'><Center><h2>Bad email or Password!</h2></center></p>";
}
$conn->close();
?>