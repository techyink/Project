
<?php
include "dbconnect.php";
session_start();


$sql="DELETE FROM exam WHERE EID = {$_GET["id"]}";
$res=$db->query($sql);

echo"<script>window.open('view_exam.php?mess=Message deleted','_self')</script>";

?>