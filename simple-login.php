<?php
//DATABASE

CREATE TABLE users(
                   id int(10)not null auto_increment,
                   email varchar(255)null,
                   password varchar(255)null,
                   primary key(id)
                   );

//CONNECTION

$hostname = "localhost:8080";
$user = "root";
$password = "";
$dbname = "database_name";
$conn = new mysqli($hostname,$username,$password,$dbname);
 if($conn) : " Connected !";

//SQL QUERY

$check_login = "SELECT email,password 
                FROM users 
                WHERE users.email='{$_POST["email"]}' 
                and 
                users.password='{$_POST["password"]}'";

// IF ELSE FOR CHECKING INPUT FIELDS ARE VALID OR NOT

   if(isset($_POST["login"])){
     echo $_POST["login"];
   }
   if(isset($_POST["email"])){
     echo $_POST["email"];
   }
   if(isset($_POST["password"])){
     echo $_POST["password"];
   }
   if($_POST["email"] == "example@gmail.com"){
     echo "preg_matched";
   }
   if(len($_POST["password"]) <= "30"){
     echo "length matched";
   }
   if($conn->query($check_login)->num_rows>0){
     echo "Location to index page";
   }
 ?>
 <html>
 <head>
 <link rel="stylesheet" href="https://w3schools.com/w3css/4/w3.css">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <meta name="description" content="My Login Page">
 <meta name="title" content="My Login Page Title">
 <meta name="og:description" content="My Login Page Description">
 <meta name="og:title" content="My Login Page Title">
 </head>
 <h1 class="w3-col w3-padding m1">Login to My Site</h1>
 <body>
 <div class="w3-container">
 <form action="" class="w3-col m4 w3-center" method="POST">
 <input placeholder="Email" type="email" class="w3-large w3-border-0 w3-col s8" name="email" maxlength="30" minlength="10" required>
 <br></br>
 <input placeholder="Password" type="password" class="w3-large w3-border-0 w3-col s8" name="password" maxlength="30" minlength="6" required>
 <br></br>
 <button type="submit" class="w3-border-0 w3-col w3-padding s8" name="login">Login</button>
 </form>
 </div>
 </body>
</html>
