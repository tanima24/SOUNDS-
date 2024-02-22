<?php
include('connection.php');
$a="select * from track;";
$q2=mysqli_query($db,$a);
$q=$_GET['t1'];
$h="";
$res="";

if(strlen($q)>0)
{
for($i=0;$i<count($a);$i++)
{
if(strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
{
if($h=="")
{
$h=$a[$i];
}
else
{
$h=$h."<br>".$a[$i];
}
}
}
}
if($h=="")
echo "No result found";
else
$res=$h;
echo $res;

?>

<form method="post">
        <input type="textbox" name="str" required/>
        <input type="submit" name="submit" value="Search"/>
</form>






