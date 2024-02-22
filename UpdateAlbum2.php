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
  
  legend 
  {
    width:170px;
    height:30px;
    border-radius:10px;
    background-color:rgba(32, 31, 31, 0.356);
    color: white;
    padding: 5px 5px;
  }
  
  input 
  {
    margin: 5px;
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
  
  .button3:hover
{
    box-shadow:0px 0px 6px 6px rgba(251, 253, 255, 0.3);
}
</style></head>
<body>
<section class="add">
    <button class="button button3"><a href="http://localhost/project/UpdateAlbum1.php">Back</a></button><br><br>
<?php
include('connection.php');

$album_name=$_GET['album_name'];
$newalbum_name=$_GET['newalbum_name'];
$year=$_GET['newyear'];

echo"<center>";

 $up="update album set album_name='$newalbum_name',year='$year' where album_name like '$album_name';";
    $q2=mysqli_query($db,$up);
    $s2=mysqli_query($db,"select * from album;");
	echo"<fieldset>";
    echo "<h2> Updated Album Table:</h2>";
    echo "<table border=5";
    echo "<tr><th>Album No</th>";
    echo "<th>Album Name</th>";
    echo "<th>Album Year</th></tr>";

    while(($n2=mysqli_fetch_array($s2))!=null)
    {
    echo "<tr><td style=text-align:center>".$n2['album_no']."</td>";
echo "<td style=text-align:center>".$n2['album_name']."</td>";
echo "<td style=text-align:center>".$n2['year']."</td></tr>";
}
echo "</table><br><br>";
echo"</fieldset>";
echo"</center>";

?>
<center>
</center>
</body>
</html>
