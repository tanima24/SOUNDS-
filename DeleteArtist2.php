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
  
  .button:hover
{
    box-shadow:0px 0px 6px 6px rgba(251, 253, 255, 0.3);
}
</style></head>
<body>

<section class="add">
    <button class="button button3"><a href="http://localhost/project/DeleteArtist1.php">Back</a></button><br><br><center>
 <?php
include('connection.php');

$a_name=$_GET['a_name'];
mysqli_query($db,"delete from search where a_id in (select a_id from artist where a_name like '$a_name');");
$q= mysqli_query($db,"delete from artist where a_name like '$a_name'");

echo"<center>";
echo "<fieldset>";
$t="select * from artist;";
$s2=mysqli_query($db,$t);
echo "<h2>Artist Table:</h2>";
echo "<table border=5 >";
echo "<tr><th>ArtistNo</th>";
echo "<th>ArtistName</th>";
echo "<th>Gender</th></tr>";

while(($n2=mysqli_fetch_array($s2))!=null)
{
echo "<tr><td style=text-align:center>".$n2['a_id']."</td>";
echo "<td style=text-align:center>".$n2['a_name']."</td>";
echo "<td style=text-align:center>".$n2['gender']."</td></tr>";
}
echo "</table>";
echo "<br><br>";
echo"</fieldset>";
echo"</center>";
?>

<br><br><br>
</center>
</body>
</html>
