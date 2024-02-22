<html>
  <head>
    <style>
      .add-header
{
    height:800px;
    width:100%;
    background-image:url(homepage.jpg);
    background-size:cover;
    background-position:center;
    position:relative;
}

.add-glass
{
    width:580px;
    height:580px;
    background-color:rgba(255,255,255,0.1);
    padding:40px;
    border-radius:5px;
    backdrop-filter:blur(10px);
    /*border:2px solid transparent;
    background-clip:padding-box;*/
    line-height:1.5;
}

.add-glass:hover
{
    box-shadow:0px 0px 10px 10px rgba(251, 253, 255, 0.3);
}

fieldset 
{
    height:500px;
    border-radius:15px;
    background-color:rgba(255,255,255,0.1);
    border:2px solid transparent;
    background-clip:padding-box;
    color:#fff;
    padding:10px 30px;
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
  
    .button 
    {
        border-radius:5px;
        background-color:rgba(95, 88, 88, 0.651);
        border:2px solid transparent;
        background-clip:padding-box;
        color:#fff;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }

  .button:hover
{
    box-shadow:0px 0px 6px 6px rgba(251, 253, 255, 0.3);
}

  .button2 
     {
        background-color:rgba(95, 88, 88, 0.651);
    } 
  
    .button3
     {
        background-color:rgba(95, 88, 88, 0.651);
    } 

    .button3 a
    {
        color:#fff;
    }
    </style></head>
<body>
  <div class="add-header">
    <button class="button button3"><a href="http://localhost/project/CrudeOper.php">Back</a></button><br><br>
<form method=get action="http://localhost/project/UpdateUser2.php">
  <center>
    <div class="add-glass">
<br><br><br>
<center>
<fieldset>
<?php
include('connection.php');
$q=mysqli_query($db,"select * from user;");
echo "<b>Select User</b>";
echo "<br><br><select name=user_name onchange=disp(this.value)>";
while($rs=mysqli_fetch_array($q))
{
echo"<option value=".$rs[1].">".$rs[1]."</option>";
}
echo"</select>";
//echo "<div id=a> </div>";
?>

<br>
<b>Enter Updated Details:</b><br><br>
<b>Name:</b><input type="text" name=newuser_name><br>

<b>Password:</b><input type="password" name=password>
<br>
<b>Gender:</b></font>
<input type="radio" name=gender value="Male">Male
<input type="radio" name=gender value="Female">Female
<input type="radio" name=gender value="Other">Other
<br><br>
<b>Phone Number:</b><input type="text" placeholder="10 Digit Number" name=ph_number maxlength="10">
<br><br>
<b>Email:</b> <input type="text" placeholder="abcd@gmail.com" name=email_id>
<br><br>
<b>Date Of Birth:</b>
<input type="date" name=Dob>
<br><br>
<input type="submit" value="Update" class="button">
<input type="reset" value="Reset" class="button button2">

</fieldset></div></form></div></body></html>