<?php
include('connection.php');
session_start();
$_SESSION['id']=$_GET['nm'];
$id=$_SESSION['id'];
/*$t=0;
$q="(select r_id, MAX(id) FROM report group by id)INTERSECTION(select r_id from report where id=".$id.");" ;
//$q="select r_id from report where id=(select LAST(id) from report where id=(select id from report where id=".$id."));";
$rs=mysqli_query($db,$q);
while($m3=mysqli_fetch_array($rs)) 
	   {	
           $t=$m3[0];
       }*/
$sql="update report set outtime=now() where r_id=".$id.";";
mysqli_query($db,$sql);
session_unset();
session_destroy();
header("location:http://localhost/project/signin.php");
exit;
?>