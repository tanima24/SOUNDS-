<html>
  <head>
    <link rel="stylesheet" href="admin.css">
  </head>
<body>
  <section class="add-header">
   <button class="button button3"><a href="http://localhost/project/CrudeOper.php">Back</a></button> <br><br>
<form method=get action="http://localhost/project/DeleteTrack2.php">
  <center>
    <div class="add-glass">
<br><br><br>
<center>

<?php
include('connection.php');
echo "<center><fieldset>";
$q=mysqli_query($db,"select * from track;");
echo "<b>Delete Track</b>";
echo "<br><br><select name=t_name >";
while($rs=mysqli_fetch_array($q))
{
echo"<option value='".$rs[1]."'>".$rs[1]."</option>";
}
echo"</select>";
//echo "<div id=a> </div>";
?>
<br><br><br>

<input type="submit" value="Delete" class="button"><!--/button-->

</fieldset>
<br><br><br>
</center></form>
</body>

</html>
