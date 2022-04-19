<div class ="navbar">
    <ul class = "list">
        <b class="nav-head">School Management System</b>
        
        

<?php
 if(isset($_SESSION["AID"])){
     

    echo '
    <li><a href= "admin_home.php">Admin Home</a></li>
    <li><a href ="Change_password.php">Settings</a></li>
    <li ><a href="logout.php">Logout</a></li>
    ';
 }

 else{

    echo '
    <li><a href= "index.php">Admin</a></li>
    <li><a href ="teacher_login.php">Teacher</a></li>
    <li><a href="Contact_us.php">Contact us</a></li>';

 }


?>

</ul>

</div>