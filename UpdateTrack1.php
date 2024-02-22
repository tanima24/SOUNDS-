<html>
  <head>
    <link rel="stylesheet" href="user_track.css"></head>
  </head>
<body>
  <section class="add-header">
    <button class="button button3"><a href="http://localhost/project/CrudeOper.php">Back</a></button><br><br>
<form method=get action="http://localhost/project/UpdateTrack2.php">
  <center>
    <div class="add-glass">
	
<br><br><br>

<fieldset>

<?php
include('connection.php');
$q=mysqli_query($db,"select * from track;");
echo "<b>Select Track</b>";
echo "<br><br><select name=t_name >";
while($rs=mysqli_fetch_array($q))
{
echo"<option value='".$rs[1]."'>".$rs[1]."</option>";
}
echo"</select>";
//echo "<div id=a> </div>";
?>
<br><br><br>

<b>Update Name:</b><input type="text" style="background-color:whitesmoke" name=newt_name>
<br><b>Update Track Type</b></font>
<input type="radio" name=type value="Audio">Audio
<input type="radio" name=type value="Video">Video
<br><br><br>
<input type="submit" value="Update" class="button">
<input type="reset" value="Reset" class="button button2"></form>

</fieldset>
<br><br><br><br><br>
</center>

</body>
</html>
