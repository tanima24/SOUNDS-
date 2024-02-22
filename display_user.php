<html>
<head>
<style>
    .add
{
  min-height:100vh;
    width:100%;
    background-image:linear-gradient(rgba(0,0,0,0.350),rgba(0, 0, 0, 0.350)),url(homepage.jpg);
    background-size:cover;
    background-position:center;
    position:relative;
}

table
 {
    color: #fff;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-color:#fff;
  }

  table, th,td 
  {
    color:#fff;
  }

fieldset 
{
    border-radius:15px;
    background-color:rgba(255,255,255,0.1);
    border:2px solid transparent;
    background-clip:padding-box;
    color:#fff;
    padding: 3px 5px;
    width:70%
  }
  
  .button3
     {
        background-color:rgba(95, 88, 88, 0.651);
        border-radius:5px;
        border:2px solid transparent;
        background-clip:padding-box;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;   
    } 

  .button3 a
  {
    color:#fff;
  }
  
  .button:hover
{
    box-shadow:0px 0px 6px 6px rgba(251, 253, 255, 0.3);
}
</style></head>
<body>
<section class="add">
    <button class="button button3"><a href="http://localhost/project/CrudeOper.php">Back</a></button><br><br>
<center>
<?php
include('connection.php');
echo '<center>';
$z="select * from user;";
$s=mysqli_query($db,$z);

echo"<fieldset>";
echo "<h2>User Table:</h2>";
echo "<table border=5";
echo "<tr><th>User id</th>";
echo "<th>User name</th>";
echo "<th>User's phone no.</th>";
echo "<th>User's email id</th>";
echo "<th>User's date of birth</th></tr>";

while(($n=mysqli_fetch_array($s))!=null)
{
echo "<tr><td style=text-align:center>".$n['id']."</td>";
echo "<td style=text-align:center>".$n['user_name']."</td>";
echo "<td style=text-align:center>".$n['ph_number']."</td>";
echo "<td style=text-align:center>".$n['email_id']."</td>";
echo "<td style=text-align:center>".$n['Dob']."</td></tr>";
//$arno=$n['a_id'];
}
echo "</table><br><br>";
echo"</fieldset>";

?>
</center>
</body>
</html>