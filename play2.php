
<?php
			 include('connection.php');
			 $a=$_GET['name'];
			 $q1="select t_name,type from album,track,search where search.album_no=album.album_no and track.t_id=search.t_id and album_name='$a';";
	   $q2=mysqli_query($db,$q1);
	  
       while($m3=mysqli_fetch_array($q2)) 
	   {		   
       echo "<td>".$m3[0]."</td>";
	   if($m3[1]=='Audio')
	   {
	   echo "<td><audio width='320' height='240' controls><source src= 'http://localhost/project/$m3[0].mp3'></td></tr>";
       echo "</audio>";
	   echo "<br>";
	   }
	   else
	   {
			echo "<td><video width='320' height='240' controls><source src=$m3[0]></td></tr>";
       echo "</video>";
	   echo "<br>";
	   }
	   }
	  
	  ?>