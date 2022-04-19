<div class = "sidebar">
<h3 class="text"> Dashboard</h3><br><hr>
<ul class = "side">
<?php
if (isset($_SESSION["AID"]))
{
echo '
<li class ="li"> <a href="view_student.php">Student information<a/></li>
<li class ="li"> <a href="add_class.php">Class</a></li>
<li class ="li"> <a href="add_subject.php">Subject</a></li>
<li class ="li"> <a href="add_staff.php">Staff</a></li>
<li class ="li"> <a href="view_staff.php">View Staff</a></li>
<li class ="li"> <a href="set_exam.php">Set Exam</a></li>
<li class ="li"> <a href="view_exam.php">View Exam</a></li>
<li class ="li"> <a href="view_student.php">View Student</a></li>
<li class ="li"> <a href="index.php">Logout</a></li>';

}

else 
echo'
<li class ="li"> <a href=""></a></li>
<li class ="li"> <a href=""></a></li>
<li class ="li"> <a href=""></a></li>
<li class ="li"> <a href=""></a></li>
<li class ="li"> <a href=""></a></li>
<li class ="li"> <a href=""></a></li>
<li class ="li"> <a href=""></a></li>
<li class ="li"> <a href=""></a></li>
<li class ="li"> <a href=""></a></li>';



?>
</ul>
</div>