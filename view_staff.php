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
    <title>Staff details Homepage</title>
</head>
<body >
<?php include "navbar.php";?>

     <img src="images/1.jpg" alt="back_img" class = "sha">
     <?php include "sidebar.php"?>
    <div class="section"> 
        
        <div id="content">
         <h1  class = "text">Welcome <?php echo $_SESSION["ANAME"];?></h1><br><hr><br>
        <H3>View staff Details</H3><br>
         <form id ="frg" autocomplete ="off">
   <input type="text" id ="txt" class = "input">


         </form>

         <div id='box'></div>


          </div>
        </div>        

        <div class="footer">
            <footer><p>Copyright &copy @ BCA 6th semester 196569628</p></footer>
            
        <script>

                    $(document).ready(function(){
                        $("#txt").keyup(function(){
                        var txt=$("#txt").val();
                        if(txt!="")
                        {
                            $.post("search.php",{s:txt},function(data){
                             $("#box").html(data);
                            });
                        }
                    

                        });
                    });


                    
        </script>
        
        
        </div>
    
    
</body>
</html>