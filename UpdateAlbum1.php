<html>
  <head>
    <link rel="stylesheet" href="admin.css">
  </head>
<body>
  <section class="add-header">
    <button class="button button3"><a href="http://localhost/project/CrudeOper.php">Back</a></button><br><br>
<form method=get action="http://localhost/project/UpdateAlbum2.php">
  <center>
    <div class="add-glass">
<br><br><br>
<center>
<fieldset>
<?php
include('connection.php');
$q=mysqli_query($db,"select * from album;");
echo "<b>Select Album</b>";
echo "<br><br><select name=album_name onchange=disp(this.value)>";
while($rs=mysqli_fetch_array($q))
{
echo"<option value='".$rs[1]."'>".$rs[1]."</option>";
}
echo"</select>";
echo "<div id=a> </div>";
?>

<br><br><br>
<b>Update Name:</b><input type="text" style="background-color:whitesmoke" name=newalbum_name>
<br>
<b>Update Year</b>
<select name=newyear>
<option value="..">...</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
</select>
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