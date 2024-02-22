<?php
include("connection.php");
session_start();
$q=$_GET['q'];
//echo $q;
$_SESSION['q']=$q;
$q1="select type,t_name from track where t_name like'%".$q."%';";
 $q2=mysqli_query($db,$q1);

echo "<section><div class='main'>
	<div class='container'>
		<div class='row'>";

while($m3=mysqli_fetch_array($q2)) 
	   {	
		if($m3[0]=='Audio')
	   {
		    echo "<div class='col-md-3' id='b'>";
		   
	    echo '<a class="album-poster" href="play_audio_search.php?tname='.$m3[1].' ">'.'<img src="http://localhost/project/'.$m3[1].'.jpg" style="width:100%;min-height: 275px;"></img><h4>'.$m3[1].'</h4></div>';
	
	   }
	   else
	   {
		   echo "<div class='col-md-3' id='b'>";
		   
	    echo '<a class="album-poster" href="play_big_search.php?tname='.$m3[1].' ">'.'<img src="http://localhost/project/'.$m3[1].'.jpg" style="width:100%;min-height: 275px;"></img><h4>'.$m3[1].'</h4></div>';
	
	   }

	   }
echo "</div></div></div></section><section>";	

$q3="select * from album where album_name like '%".$q."%';";
	   $q4=mysqli_query($db,$q3);
	 
echo "<div class='main'>
	<div class='container'>
		<div class='row'>";
		
		//echo "<div class='container'>";
       while($m3=mysqli_fetch_array($q4)) 
	   {		   
		   //$_SESSION['name']=$m3[1];
       /*echo "<td>".$m3[1]."</td>";*/
	   echo "<br><br><div class='col-md-3'>";
	   echo '<a class="album-poster" href="play2_copy_search.php?name='.$m3[1].' ">'.'<img src="http://localhost/project/'.$m3[1].'.jpg" width=100% style=" min-height:275px;">'.'</a><h4 style="color:#fff;"><br>'.$m3[1].'</h4></div>';
      
	   }
	   echo "</div></div></div>";
	   echo "</section>
	   <section>";
	   
	   
	   $q5="select * from artist where a_name like '%".$q."%';";
	   $q6=mysqli_query($db,$q5);
	  echo "<div class='main'>
	<div class='container'>
		<div class='row'>";
		//echo "<div class='col-md-12'><h1 style='color:white;'>ARTIST</h1></div>";
       while($m3=mysqli_fetch_array($q6)) 
	   {		   
       /*echo "<td>".$m3[1]."   </td>    ";*/
	   echo '<div class="col-md-3"><a class="album-poster" href="play2_copy_artists_search.php?name='.$m3[1].'">'.'<img src="http://localhost/project/'.$m3[1].'.jpg" width=100% style=" min-height:275px;">'.'</a><h4 style="color:#fff;"><br>'.$m3[1].'</h4></div>';
       }
	   echo "</div></div></div></section>";
		
	   ?>