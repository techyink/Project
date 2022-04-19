<?php
include "dbconnect.php";
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" tyep ="text/css" href ="css/style.css" >
    <title>School Managment System</title>
</head>

<body class="back">

<?php include "navbar.php";?>

    <div>
        <div> <img src="images/b1.jpg" alt="Background_image" width="700"></div>
        <div class="heading"><h1>Teacher's login</h1></div>
        <div class="log">
<?php

 
 if (isset($_POST["login"]))
 {
	 
 $sql= "select * from staff where TNAME ='{$_POST["tname"]}' and  TPASS='{$_POST["tpass"]}'";
 $res= $db->query($sql);
 
 if ($res->num_rows>0){
 
 $ro = $res->fetch_assoc();
  $_SESSION["ID"]= $ro["TID"];
  $_SESSION["NAME"]= $ro["TNAME"];

  echo "<script>window.open('teacher_home.php','_self');</script>";
  
  
 }
 else 
	 echo "<div class = 'error'>Invalid username and password</div>";
 }
 
?>

      <form method="POST" action="" name="login" >
      <label for="" >Username</label>
      <input type="text" name ="tname" required class="input"><br>
      <label for="">Password</label>
      <input type="password" name="tpass"  require class="input"><br>
      <button type ="submit" class= "btn" name ="login">Login Here</button>
        </form></div>



        <div class="footer">
            <footer><p>Copyright &copy @ BCA 6th semester 196569628</p></footer>
        </div>
    </div>
    
</body>
</html>