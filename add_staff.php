<?php
include "dbconnect.php";
session_start();
session_cache_expire(1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" tyep ="text/css" href ="css/style.css" >
    <title>Add Staff Homepage</title>
</head>
<body >
<?php include "navbar.php";?>

     <img src="images/1.jpg" alt="back_img" class = "sha">
     <?php include "sidebar.php"?>
    <div class="section"> 
        
        <div id="content">
         <h1  class = "text">Welcome <?php echo $_SESSION["ANAME"];?></h1><br><hr><br>
         <?php
         
         if(isset($_POST["submit"])){

         
         $sql= "insert into staff (TNAME,TQUL,TSAL) values ('{$_POST["tname"]}','{$_POST["qul"]}','{$_POST["sal"]}')";

if ($db->query($sql)){

    echo "<div class='success' >Data inserted successfully</div>";
 }
else{
echo "<div class ='failure'>Unble to insert into database</div>";
}
         
         
         
         }
         ?>
<label for=""><h3>Add Staff details</h3></label><br>
<form method="POST"  name="Enter" action="<?php echo($_SERVER['PHP_SELF']);?>">
      <label for="" >Staff Name</label><br>
      <input type="text" name ="tname" required class="input"><br>
      <label for="">Qualification</label><br>
      <input type="text" name="qul"  require class="input"><br>
      <label for="">Salary</label><br>
      <input type="text" name="sal"  require class="input"><br>

      <button type ="submit" class= "btn" name ="submit">Enter</button>
        </form></div>
        
          </div>
        </div>        

        <div class="footer">
            <footer><p>Copyright &copy @ BCA 6th semester 196569628</p></footer>
        </div>
    
    
</body>
</html>