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
    <title>Admin Homepage</title>
</head>
<body >
<?php include "navbar.php";?>

     <img src="images/1.jpg" alt="back_img" class = "sha">
     <?php include "sidebar.php"?>
    <div class="section"> 
        
        <div id="content">
         <h1  class = "text">Welcome <?php echo $_SESSION["NAME"];?></h1><br><hr><br>
         <h2 >School Information</h2><br>
         <img src="images/home.jpg" alt="home_image" class=imags>

         <p class= para>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ex dolores, eligendi,
          voluptates perferendis maiores, alias placeatillum sint consequatur quis iusto atque?
         </p>
         <p class = para>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ex dolores, eligendi,
          voluptates perferendis maiores, alias placeatillum sint consequatur quis iusto atque?
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ex dolores, eligendi,
          voluptates perferendis maiores, alias placeatillum sint consequatur quis iusto atque?</p>

          </div>
        </div>        

        <div class="footer">
            <footer><p>Copyright &copy @ BCA 6th semester 196569628</p></footer>
        </div>
    
    
</body>
</html>