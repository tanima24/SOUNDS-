<?php
include('connection.php');
session_start();
//echo $_SESSION['id'];
?>
<html>
  <head>
  <link rel="stylesheet" href="admin.css">
</head>
<body>

  <section class="add-header">
    <button class="button button3"><a href="http://localhost/project/CrudeOper.php">Back</a></button><br><br>
	
<form method=get action="http://localhost/project/Add.php">
<center>
<div class="add-glass">

<?php
include('connection.php');
echo "<center><fieldset><center>";
$q=mysqli_query($db,"select * from album;");
echo "<legend><b>Album Details</b></legend>";
echo "<br><b>Album Name: </b><select name=album_name onchange=disp(this.value)>";
while($rs=mysqli_fetch_array($q))
{
echo"<option value='".$rs[1]."'>".$rs[1]."</option>";
}
echo"</center></select><br><br></fieldset></center>";
echo "<div id=a> </div>";
?>
<!--legend>ALBUM DETAILS</legend>
<b>Album Name:</b><input type="text" style="background-color:whitesmoke" name=album_name>
<br>
<b>Year</b>
<select name=year>
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
</fieldset-->
<br><br>
<?php
include('connection.php');

echo "<center><fieldset><center>";
$q=mysqli_query($db,"select * from artist;");
echo "<legend><b>Artist Details</b></legend>";
echo "<br><b>Artist Name: </b><select name=a_name onchange=disp(this.value)>";
while($rs=mysqli_fetch_array($q))
{
echo"<option value='".$rs[1]."'>".$rs[1]."</option>";
}
echo"</center></select><br><br></fieldset></center>";
echo "<div id=a> </div>";
?>
<!--center>
<fieldset>
<legend>ARTIST DETAILS</legend>
<b>Artist Name:</b><input type="text" style="background-color:whitesmoke" name=a_name><br>
<b>Gender:</b></font>
<input type="radio" name=gender value="Male">Male
<input type="radio" name=gender value="Female">Female
<input type="radio" name=gender value="Other">Other
</font>
</fieldset--><br><br>
<fieldset><center>
<legend>TRACK DETAILS</legend>

<b>Track Name:</b><input type="text" style="background-color:whitesmoke" name=t_name>
<br>
<b>Type</b></font>
<input type="radio" name=type value="Audio">Audio
<input type="radio" name=type value="Video">Video
</font>
<br><br><br>
</center>
<center>
<input type="submit" value="Add" class="button">
<input type="reset" value="Reset" class="button button2">

<br><br>
</fieldset><br><br><br></center></form>
<br><br></body></html>