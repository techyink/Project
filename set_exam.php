<?php
include "dbconnect.php";
session_start();
$edate = $_POST['da'].'-'.$_POST['mo'].'-'.$_POST['ye'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" tyep ="text/css" href ="css/style.css" >
    <title>Exam Homepage</title>
</head>
<body >
<?php include "navbar.php";?>

     <img src="images/1.jpg" alt="back_img" class = "sha">
     <?php include "sidebar.php"?>
    <div class="section"> 
        
        <div id="content">
         <h1  class = "text">Welcome <?php echo $_SESSION["NAME"];?></h1><br><hr><br>
                 <label for=""><h2>Set Exam Time Table Details</h2></label><br><br>

<?php
        
if (isset($_POST["submit"])){

    $sql="insert into exam (ENAME,ETYPE,EDATE,ESESSION,CLA,SUB) values('{$_POST["ename"]}','{$_POST["etype"]}','{$edate}','{$_POST["esession"]}','{$_POST["cla"]}','{$_POST["sub"]}')";


    if ($db->query($sql)){

        echo "<div class='success' >Data inserted successfully</div>";
     }
else{
echo "<div class ='failure'>Unble to insert into database</div>";

}

}
?>

         <form method="post" action="<?php echo($_SERVER["PHP_SELF"]);?>">
         <div class ='bbox'>
         <label for="">Exam Name</label>
         <input  name ="ename"type="text" class="input" >
         <label for="">Select Term</label>
         <Select name ='etype'class='input'>
        <option value="Select">Select</option>
        <option value="I">Ist Term</option>
        <option value="II">IInd Term</option>
        <option value="III">IIIrd Term</option>
        </Select><br>
        
        <label for="Date" >Exam Date</label><br>
        <Select name= "da" class='input4'>
            <option value="Date">Date</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        
        </Select>

<select  name ="mo" Class="input4">
    <option value="month">Month</option>
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
        
</select>
<select  name ="ye" Class="input4">
<option value="year">Year</option>
<option value="2023">2023</option>
<option value="2022">2022</option>
<option value="2021">2021</option>
</select>
<button method = "submit" name ="submit" type ="btn" class="btnt">Add Exam Details</button>
 
</div>       

<div class =rbox>
    <label for="Session">Session</label>
<select name="esession" id="" class="input5">
   <option value="" >Select</option>
    <option value="FN" >FN</option>
    <option value="AN" >AN</option>
</select>
<br><label for="class">class</label>
<select name="cla" class="input5">
    <?php
    
    $sql= "Select distinct  CNAME from class ";
    $res=$db->query($sql);

    if ($res->num_rows>0){

        echo"<option>Select</option>";
        while($ro=$res->fetch_assoc()){
        echo "
        <option value ='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>
         ";}

    }
    
    ?>
    
</select>

<br><label for="Subject">Subject</label>
<select name="sub" class="input5">
<?php
    
    $sql= "Select distinct  SNAME from subject ";
    $res=$db->query($sql);

    if ($res->num_rows>0){

        echo"<option>Select</option>";
        while($ro=$res->fetch_assoc()){
        echo "
        <option value ='{$ro["SNAME"]}'>{$ro["SNAME"]}</option>
         ";}

    }
    
    ?>
</select>
</div>
</form>

         </div>
        </div>        

        <div class="footer">
            <footer><p>Copyright &copy @ BCA 6th semester 196569628</p></footer>
        </div>
    
    
</body>
</html>