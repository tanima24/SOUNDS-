<?php
session_start();
//echo $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
    <head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity=
    "sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>    
     <link rel="stylesheet" href="admin.css">
</head>
    <body>
        <section class="header">
            <nav>
                <a href="hp1.html"><img src="logo1.png"></a>
                <div class="nav-links">
                    <ul>
                        <li><a href="http://localhost/project/display_report.php">Reports</a></li>
                        <li><a href="http://localhost/project/logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
<center>
<br><br>
<div class="glass">
    <br>
<table>
  <tr>
    <th></th>
    <th>Display</th> 
	<th>Delete</th>
    <th>Update</th>
    <th>Add</th>
  </tr>
  <tr>
  <tr>
 <td>USER</td> 
 <td><a href="display_user.php">Display</a></td>
    <td><a href="DeleteUser1.php">Delete</a></td>
    <td><a href="UpdateUser1.php">Update</a></td>
    <td><bgcolor=DarkSlateBlue></td>
  </tr>
  
 <tr>
	<td>ARTIST</td>
    <td><a href="display_artist.php">Display</a></td>
	<td><a href="DeleteArtist1.php">Delete</a></td>	
	<td><a href="UpdateArtist1.php">Update</a></td>
    <td><a href="AddArtist.html">Add</a></td>
    </tr>

<tr><td>ALBUM</td>
<td><a href="display_album.php">Display</a></td>
    <td><a href="DeleteAlbum1.php">Delete</a></td>
	<td><a href="UpdateAlbum1.php">Update</a></td>
    <td><a href="AddAlbum.html">Add</a></td>
    </tr>
	
	<tr><td>TRACK</td>
    <td><a href="display_track.php">Display</a></td>
    <td><a href="DeleteTrack1.php">Delete</a></td>
	<td><a href="UpdateTrack1.php">Update</a></td>
    <td><a href="Add_track.php">Add</a></td>
     </tr>
</div>
	</table></center></section></body></html>