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
    <title>Class Homepage</title>
</head>
<body >
<?php include "navbar.php";?>

     <img src="images/1.jpg" alt="back_img" class = "sha">
     <?php include "sidebar.php"?>
    <div class="section"> 
        
        <div id="content">
         <h1  class = "text">Welcome <?php echo $_SESSION["ANAME"];?></h1><br><hr><br>

         <?php
          
          if (isset($_POST["submit"])){

            $sql = "INSERT INTO class (CNAME,CSEC) VALUES('{$_POST["cname"]}', '{$_POST["sname"]}')";
        
            if ($db->query($sql)){

                    echo "<div class='success' >Data inserted successfully</div>";
                 }
       else{
           echo "<div class ='failure'>Unble to insert into database</div>";
       }
            


          }
          ?>
        <label><h2>Class details</h2></label><br>
         <form  method="POST" action="<?php echo($_SERVER['PHP_SELF']);?>">
         <label><h3>Class name</h3></label>
          <select name="cname" required class="input2">
              <option value="">Select</option>
              <option value="I">I</option>
              <option value="II">II</option>
              <option value="III">III</option>
              <option value="IV">IV</option>
              <option value="V">V</option>
              <option value="VI">VI</option>
              <option value="VII">VII</option>
              <option value="VIII">VIII</option>
              <option value="IX">IX</option>
              <option value="X">X</option>
</select>

    <Label><h3>Add section</h3></Label>
    <select name="sname" required class="input2">
 
              <option value="">Select</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
              <option value="F">F</option>
              <option value="G">G</option>
              <option value="H">H</option>
              <option value="I">I</option>
              <option value="J">J</option>
              </select><br><br>
              <button class = "btn" type="submit" name ="submit">submit</button>

             <?php
             
             if(isset($_GET["mess"])){

                echo "<div class='success'>Data deleted from database!!</div>";
             }
             
             
             
             ?> 


        </form>
        <label for=""><h3>Class details</h3></label>
        <div class= tbox> 
           
        <table border ="2px">

            <tr>
                   <th>S.no</th>
                   <th>Class name</th>
                   <th>Section</th>
                   <th>Delete</th>
            </tr>
           

            <?php
            
            $sql= "select * from class";

            $res= $db->query($sql);
            
            if($res->num_rows>0){
                $i=0;
                while($ro=$res->fetch_assoc()){

                    $i++;

                    echo" 
                    <tr>
                    <td>{$i}</td>
                    <td>{$ro["CNAME"]}</td>
                    <td>{$ro["CSEC"]}</td>
                    <td><a href='delete.php?id={$ro["CID"]}'class= 'btnr'>Delete</a></td>
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