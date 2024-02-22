<?php
session_start();
//echo $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	
	
		.col-md-3{
    		margin-bottom: 40px;
    	}
    	.album-poster{
    		position: relative;
    		display: block;
    		border-radius: 7px;
    		overflow: hidden;
    		box-shadow: 0 15px 35px #3d2173a1;
    		transition: all ease 0.4s;
			height: 275px;
    	}
    	.album-poster:hover{
    		box-shadow: none;
    		transform: scale(0.98) translateY(5px);
    	}
		
		.wel 
		{

	margin:0 0;
	color:#fff;
	background:rgba(200, 236, 169, 0.5);
	text-align: center;
	padding:5px;
	font-size:20px;
	font-weight:bold;
}
		
		
		h1{
    		font-size: 34px;
    		margin-bottom: 34px;
    		border-bottom: 4px solid #e6e6e6;
    		padding-bottom: 15px;
    	}	

	</style>
	<!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Website</title>
    <link rel="stylesheet" href="newww 6.css">
	<link rel="stylesheet" href="bootstrap.css">
	
</head>
<body bgcolor="black">

    <div class="hero">
        <div class="navbar">
            <img src="http://localhost/project/logo1.png" class="logo" width=20%>
            <ul>
                <li><a href="http://localhost/project/newww 8.php">Home</a></li>
				<li><a href="http://localhost/project/search_track.php">Search</a></li>
                <li><a href="http://localhost/project/logout.php?nm=<?php echo $_SESSION['id'];?>">Logout</a></li>      
            </ul>
        </div>
		<div class="wel">
	Welcome  <?php echo $_SESSION['name']?></div>
		<br><br>
		<div class="slideshow-container">

        <div class="mySlides fade">
            <img src="http://localhost/project/pos1.jpg" style="width:100%"></img>
            
        </div>

        <div class="mySlides fade">
            <img src="http://localhost/project/pos2.jpg" style="width:100%"></img>
            
        </div>

        <div class="mySlides fade">
            <img src="http://localhost/project/pos3.jpg" style="width:100%"></img>
            
        </div>
		<div class="mySlides fade">
            <img src="http://localhost/project/pos3.jpg" style="width:100%"></img>
            
        </div>
		
		<div class="mySlides fade">
            <img src="http://localhost/project/pos4.jpg" style="width:100%"></img>
            
        </div>
		
		<div class="mySlides fade">
            <img src="http://localhost/project/pos5.jpg" style="width:100%"></img>
            
        </div>
		
		<div class="mySlides fade">
            <img src="http://localhost/project/pos6.jpg" style="width:100%"></img>
            
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
		<span class="dot" onclick="currentSlide(4)"></span>
		<span class="dot" onclick="currentSlide(5)"></span>
		<span class="dot" onclick="currentSlide(6)"></span>
    </div>
</div>

    <!--script src="script.js"></script-->
	<?php
			 include('connection.php');
			 echo "<section>";
			 $q=mysqli_query($db,"select t_id,count(t_id) as a from top_songs group by t_id order by a desc;");
			  $c=0;
			  echo "<div class='main'>
			 <div class='container'>
			 <div class='row'>";
			 echo "<div class='col-md-12'><h1 style='color:white;'>Most Played Songs</h1></div>";
			  while($rs=mysqli_fetch_array($q))
			  {
			 if($c<11)
			 {
			 //echo $rs[0]."<br>";
			 $c++;
			 $q1="select type,t_name from track where t_id=".$rs[0];
			   $q2=mysqli_query($db,$q1);
			  
					while($m3=mysqli_fetch_array($q2))
			   {
			 if($m3[0]=='Audio')
			   {
				echo "<div class='col-md-3'>";
			  
				echo '<a class="album-poster" href="play_audio_top_songs.php?tname='.$m3[1].' ">'.'<img src="http://localhost/project/'.$m3[1].'.jpg" style="width:100%;min-height: 275px;"></img></a><h4 style="color:#fff;"><br>'.$m3[1].'</h4></div>';
			 
			   }
			   else
			   {
			   echo "<div class='col-md-3'>";
			  
				echo '<a class="album-poster" href="play_big_top_songs.php?tname='.$m3[1].' ">'.'<img src="http://localhost/project/'.$m3[1].'.jpg" style="width:100%;min-height: 275px;"></img></a><h4 style="color:#fff;"><br>'.$m3[1].'</h4></div>';
			 
			   }
			   }
			  
			 }
			 
			  } echo "</div></div></div>";
			  
			 echo "</section>";
			echo "<section>";
			
			$q1="select * from album;";
	   $q2=mysqli_query($db,$q1);
	 echo "<div class='main'>
	<div class='container'>
		<div class='row'>";
		echo "<div class='col-md-12'><h1 style='color:white;'>ALBUMS</h1></div>";
		//echo "<div class='container'>";
       while($m3=mysqli_fetch_array($q2)) 
	   {		   
		   //$_SESSION['name']=$m3[1];
       /*echo "<td>".$m3[1]."</td>";*/
	   echo "<br><br><div class='col-md-3'>";
	   echo '<a class="album-poster" href="play2_copy.php?name='.$m3[1].' ">'.'<img src="http://localhost/project/'.$m3[1].'.jpg" width=100% style=" min-height:275px;">'.'</a><h4 style="color:#fff;"><br>'.$m3[1].'</h4></div>';
      
	   }
	   echo "</div></div></div>";
	   echo "</section>
	   <section>";
	   
	   
	   $q1="select * from artist;";
	   $q2=mysqli_query($db,$q1);
	  echo "<div class='main'>
	<div class='container'>
		<div class='row'>";
		echo "<div class='col-md-12'><h1 style='color:white;'>ARTIST</h1></div>";
       while($m3=mysqli_fetch_array($q2)) 
	   {		   
       /*echo "<td>".$m3[1]."   </td>    ";*/
	   echo '<div class="col-md-3"><a class="album-poster" href="play2_copy_artists.php?name='.$m3[1].'">'.'<img src="http://localhost/project/'.$m3[1].'.jpg" width=100% style=" min-height:275px;">'.'</a><h4 style="color:#fff;"><br>'.$m3[1].'</h4></div>';
       }
	   echo "</div></div></div></section>";
	   
	   
	  
	  ?>

   
    <script>

        var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 5 seconds
}
    </script>

</body>
</html>