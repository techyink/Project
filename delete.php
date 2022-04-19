
<?php
include "dbconnect.php";
session_start();


$sql="DELETE FROM class WHERE CID = {$_GET["id"]}";
$res=$db->query($sql);

echo"<script>window.open('add_class.php?mess=Message deleted','_self')</script>";

?>