<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="page2_3.css">
	<style>
	.navbar
{
width: 88%;
margin: auto;
padding: 15px 0;
display: flex;
align-items: center;
justify-content: space-between;
}

.navbar li {
    list-style: none;
    display: inline-block;
    margin:  0 15px;
}

.navbar li a{
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-family: sans-serif;
}

.navbar li::after
{
    content:'';
    width:0%;
    height:2px;
    background:#fff;
    display:block;
    margin:auto;
    transition:0.5s ease;
}

.navbar li:hover::after
{
    width:100%;
}

</style>
</head>	
<body bgcolor=black>

<?php
session_start();

		echo "<head><meta name='viewport' content='width=device-width, initial-scale=1.0'></head>";
			 include('connection.php');
			 $a='';
			 $t=0;
			 $a=$_GET['tname'];
			 $q1="select t_id from track where t_name='".$a."';";
			 $q2=mysqli_query($db,$q1);
			 while($m1=mysqli_fetch_array($q2))
			 {
				 $t=$m1[0];
			 }
			 mysqli_query($db,"insert into top_songs (t_id) values (".$t.")");
			 echo "<div style='float: top; height: 550px;'><img src='http://localhost/project/".$a.".jpg' height=70%></img>
        
    </div>
    <div style='float: bottom;'>
        ";
			 echo "<audio width=100% height=auto controls autoplay><source src= 'http://localhost/project/".$a.".mp3' type='audio/mpeg'></source>
</audio></div>";
	//		   echo "<audio id='myaudio'><source src= 'http://localhost/$m3[0].mp3'></td></tr>";
//			   echo "</audio>";
					 

?>

<div class="navbar"><li><a href="http://localhost/project/search_track.php">BACK</a></div>
</body>
</html>

	