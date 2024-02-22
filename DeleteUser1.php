<html>
  <head>
    <link rel="stylesheet" href="admin.css">
  </head>
<body>
  <section class="add-header">
    <button class="button button3"><a href="http://localhost/project/CrudeOper.php">Back</a></button><br><br>
<form method=get action="http://localhost/project/DeleteUser2.php">
  <center>
    <div class="add-glass">
<br><br><br>
<center>
<fieldset>
<?php
include('connection.php');

echo "<center>";
$q=mysqli_query($db,"select * from user;");
echo "<b>Select User</b>";
echo "<br><br><select name=user_name onchange=disp(this.value)>";
while($rs=mysqli_fetch_array($q))
{
echo"<option value=".$rs[1].">".$rs[1]."</option>";
}
echo"</select>";
echo "<div id=a> </div>";
?>
<br><br><br>

<button type="submit" class="button">Delete</button>

</fieldset>
<br><br><br>
</center>
</body>
</form>
</html>
