<html>
  <head>
    <link rel="stylesheet" href="admin.css">
  </head>
<body>
  <section class="add-header">
    <button class="button button3"><a href="http://localhost/project/CrudeOper.php">Back</a></button><br><br>
<form method=get action="http://localhost/project/UpdateArtist2.php">
  <center>
    <div class="add-glass">
<br><br><br>
<center>
<fieldset>
<?php
include('connection.php');
$q=mysqli_query($db,"select * from artist;");
echo "<b>Select Artist</b>";
echo "<br><br><select name=a_name onchange=disp(this.value)>";
while($rs=mysqli_fetch_array($q))
{
echo"<option value='".$rs[1]."'>".$rs[1]."</option>";
}
echo"</select>";
echo "<div id=a> </div>";
?>

<br><br><br>
<b>Update Name:</b><input type="text" style="background-color:whitesmoke" name=newa_name>
<br>
<b>Update Gender:</b></font>
<input type="radio" name=gender value="Male">Male
<input type="radio" name=gender value="Female">Female
<input type="radio" name=gender value="Other">Other
</font>


<br><br><br>
<input type="submit" value="Update" class="button">
<input type="reset" value="Reset" class="button button2">

</fieldset>
<br><br><br><br><br>
</center>
</body>
</form>
</html>
