
<?php
include "dbconnect.php";
session_start();


$sql="DELETE FROM subject WHERE SID = {$_GET["id"]}";
$res=$db->query($sql);

echo"<script>window.open('add_subject.php?mess=Message deleted','_self')</script>";

?>