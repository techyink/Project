<?php

include "dbconnect.php";

session_start();

unset($_SESSION["ID"]);
unset($_SESSION["NAME"]);

echo "<script>window.open('index.php','_self')</script>";
echo"u are logout pls login again ";

session_destroy();





?>