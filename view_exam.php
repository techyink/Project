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

         <label for=""><h2>View Exam details</h2></label><br><br>
         <?php
             
             if(isset($_GET["mess"])){

                echo "<div class='success'>Data deleted from database!!</div>";
             }
             
             
             
             ?>
         <div>
<table border ="1px">
<tr>
<th>S.no</th>
<th>Exam Name</th>
<th>Exam Type</th>
<th>Exam Date</th>
<th>Exam Session</th>
<th>Exam Subject</th>
<th>Exam Class</th>
<th>Delete</th>
</tr>

<?php

$sql="select * from exam ";
$res=$db->query($sql);
if($res->num_rows>0){
$i=0;
while($ro=$res->fetch_assoc()){
$i++;

echo"<tr>
<td>{$i}</td>
<td>{$ro["ENAME"]}</td>
<td>{$ro["ETYPE"]}</td>
<td>{$ro["EDATE"]}</td>
<td>{$ro["ESESSION"]}</td>
<td>{$ro["SUB"]}</td>
<td>{$ro["CLA"]}</td>
<td ><a href ='exam_delete.php?id={$ro["EID"]}' class='btnr'>Delete</a></td>


</tr>";
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