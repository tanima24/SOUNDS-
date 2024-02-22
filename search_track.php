<?php
session_start();
//echo $_SESSION['id'];
?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap.css">
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<style>
input[type=text] {
  width: 130px;
  height: 40px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
	align: left;
  width: 100%;
}

body{
    		<!--background-color: black;<--#f7f7f7-->;
    		font-family: Open sans;
			height:100vh;
			background-color:black;
    	}
    	
    	.main{
    		padding: 40px 0;
			
    	}
		.col-md-3:hover{
    		height:400px;
    	}
    	.col-md-3{
    		margin-bottom: 40px;
			opacity:0.5;
			transition:1s;
			background:#060c21;
			padding-right:10px;
			
    	}
		
		.col-md-3:hover {
    		opacity: 2;
    	}
		.col-md-3:before{
    		content:'';
			position: absolute;
			top:-2px;
			left:-2px;
			right:-2px;
			bottom:-2px;
			background:#000;
			z-index:-1;
    	}
		.col-md-3:after{
    		content:'';
			position: absolute;
			top:-2px;
			left:-2px;
			right:-2px;
			bottom:-2px;
			background:#000;
			z-index:-1;
			filter:blur(100px);
			
    	}
		.col-md-3:before,
		.col-md-3:after{
    		background: linear-gradient(235deg,#89ff00,#010615,#00bcd4);
			padding-right:10px;
    	}
		.col-md-3:nth-child(2):before,
		.col-md-3:nth-child(2):after{
    		background: linear-gradient(235deg,#ff005e,#010615,#fbff00);
    	}
		.col-md-3:nth-child(3):before,
		.col-md-3:nth-child(3):after{
    		background: linear-gradient(235deg,#772aff,#010615,#2196F3);
    	}
		
    	.album-poster{
    		position: relative;
    		display: block;
    		border-radius: 7px;
    		overflow: hidden;
    		box-shadow: 0 15px 35px #3d2173a1;
    		transition: all ease 0.4s;
			box-sizing: border-box;
    	}
    	.album-poster:hover{
    		box-shadow: none;
    		transform: scale(0.98) translateY(5px);
    	}
    	h3{
    		font-size: 34px;
    		margin-bottom: 34px;
    		border-bottom: 4px solid #e6e6e6;
    		padding-bottom: 15px;
			color:white;
    	}
    	p{
    		font-size: 15px;
			color:white;
    	}
    	h4{
    		font-size: 16px;
    		text-transform: uppercase;
    		margin-top: 15px;
    		font-weight: 700;
			color:white;
    	}
		
		
		
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
	

<script>
            function g_search(s)
            {
                var x;
                if(s.length==0)
                {
                   window.location.reload(); 
                }

                if(window.XMLHttpRequest)
                {
                    x= new XMLHttpRequest(); 
                }
                else
                {
                    x= new ActiveXObject("Microsoft.XMLHTTP");
                }

                x.onreadystatechange=function()
                {
                    if(x.readyState== 4)
                    {
                        document.getElementById('a').innerHTML=x.responseText;//vegetable koftay ka row
                    }
                }

                x.open("GET","http://localhost/project/search_track_ajax2.php?q="+s,"true");
                x.send();
            }

            </script>	

</head>
<body>
<body bgcolor="black">
<section>
    <div class="hero">
        <div class="navbar">
            <img src="http://localhost/project/logo1.png" class="logo" width=20%>
            <ul>
                <li><a href="http://localhost/project/newww 8.php">Home</a></li>
				<li><a href="http://localhost/project/search_track.php">Search</a></li>
                <li><a href="http://localhost/project/logout.php?nm=<?php echo $_SESSION['id'];?>">Logout</a></li>
        
            </ul>
        </div>
	</div>
<section>

	<center>
    <input type="text" name="q" placeholder="Search..." style="margin-right: auto; margin-left: auto; width: 480px; margin: 20px; border-radius: 8px; border: 1px solid #eee; padding: 10px; font-size: 14px;"  onkeyup=g_search(this.value)>
</center>

<div id=a>

<?php
/*
			echo "<head><meta name='viewport' content='width=device-width, initial-scale=1.0'></head>";
			 include('connection.php');
			 
			
			 $q1="select type,t_name from track";
	   $q2=mysqli_query($db,$q1);
	   echo "<div class='main'>
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
	   echo "</div></div></div>";
	  
	*/  ?>
	  
	  </div>
	 </body>
	  </html>