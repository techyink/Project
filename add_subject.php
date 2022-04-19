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
    <title>Subject Homepage</title>
</head>
<body >
<?php include "navbar.php";?>

     <img src="images/1.jpg" alt="back_img" class = "sha">
     <?php include "sidebar.php"?>
    <div class="section"> 
        
        <div id="content">
         <h1  class = "text">Welcome <?php echo $_SESSION["NAME"];?></h1><br><hr><br>

         <?php
          
          if (isset($_POST["submit"])){

            $sql = "INSERT INTO subject (SNAME) VALUES('{$_POST["sname"]}')";
        
            if ($db->query($sql)){

                    echo "<div class='success' >Data inserted successfully</div>";
                 }
       else{
           echo "<div class ='failure'>Unble to insert into database</div>";
       }
            


          }
          ?>
        <label><h2>Subject details</h2></label><br>
         <form  method="POST" action="<?php echo($_SERVER['PHP_SELF']);?>">
         <label for="">Subject Name</label><br>
      <input type="text" name="sname"  require class="input2"><br>
    <button class = "btn" type="submit" name ="submit">submit</button>

    <?php
             
             if(isset($_GET["mess"])){

                echo "<div class='success'>Data deleted from database!!</div>";
             }
             
             
             
             ?>
        </form>
        <label for=""><h3>Subjects details</h3></label>
        <div class= sbox> 
        
        <table border ="1px">

            <tr>
                   <th>S.no</th>
                   <th>Subject name</th>
                   <th>Delete</th>
            </tr>
           

            <?php
            
            $sql= "select * from subject";

            $res= $db->query($sql);
            
            if($res->num_rows>0){
                $i=0;
                while($ro=$res->fetch_assoc()){

                    $i++;

                    echo" 
                    <tr>
                    <td>{$i}</td>
                    <td>{$ro["SNAME"]}</td>
                    
                    <td><a href='sub_delete.php?id={$ro["SID"]}'class= 'btnr'>Delete</a></td>
                    </tr>
                    <br>";
                }


            }
            
            
            
            ?>

             </table>
        </div>


        </div>
        </div>        

        <div class="footer">
            <footer><p>Copyright &copy @ BCA 6th semester 196569628</p></footer>
        </div>
    
    
</body>
</html>