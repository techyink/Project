<?php
include "database.php";
session_start();

$sql= "select * from staff where TNAME like '{$_POST["s"]}%'";
$res=$db->query($sql);

echo "<table border='1px' class ='table'>
<tr>
 <th>S.No</th> 
 <th>Name</th>
 <th>Qualification</th>
 <th>Salary</th>
 <th>View</th>
 <th>Delete</th>

 
</tr>

";

if ($res->num_rows>0){

    $i=0;
    while ($ros = $res->fetch_assoc()){
        $i++;
        echo "
        <tr>
        <td>{$i}</td>
        <td>{$row["TNAME"]}</td>
        <td>{$row["TQUL"]}</td>
        <td>{$row["TSAL"]}</td>
        <td><a href = 'view_staff.php?id ={$row["TID"]}'class= 'btnb'>View</a></td>
        <td><a href = 'delete_staff.php?id ={$row["TID"]}'class= 'btnb'>Delete</a></td>
       </tr>
        ";
    }
    
echo "</table>";

else {
        echo "<div class ='error'>No Data Found</div>";
    }

}



?>