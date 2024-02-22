<?php
$showAlert=false;
$showError=false;
if($_SERVER['REQUEST_METHOD']=="POST")
{
include("connection.php");

  $name=$_POST['name'];
  $ph=$_POST['ph'];
  $email=$_POST['email'];
  $dob=$_POST['dob'];
  $pass1=$_POST['pass1'];
  $pass2=$_POST['pass2'];
  //$exists=false;
  //check whether user exists
  $exist_q1="select * from user where user_name='$name'";
  $result=mysqli_query($db,$exist_q1);
  $numExistRows=mysqli_num_rows($result);




  $exist_q2="select * from user where password='$pass1'";
  $result_pass=mysqli_query($db,$exist_q2);
  $numExistRows1=mysqli_num_rows($result_pass);
  if($numExistRows > 0)
  {
     // $exists=true;
      $showError="Username already exists";
  }
  else if($numExistRows1 > 0)
  {
    $showError="Password already exists";
  }
  else if(strlen($ph)!=10)
  {
    $showError="Phone number should be 10 digits";
  }
  else
  {
     // $exists=false;
  
     if((strlen($pass1) >=8 )&&(strlen($pass1)<=12))
     {
            if(($pass1 == $pass2))
        {
   
    $q1="insert into User(user_name,password,ph_number,email_id,Dob,type) values('$name','$pass1','$ph','$email','$dob','user')";
    $result=mysqli_query($db,$q1);
    //echo "registration successful";
    if($result)
    {
        $showAlert=true;
    }
}

else
{
    $showError="Passwords do not match";
}

  }
  else
    {
        $showError="Passwords should be between 8-12 characters";
    }
}
}
?>

<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="style.css">
</head>
    <body>
        <section class="header">
        <nav>
               <img src="logo1.png">
                <div class="nav-links">
                    <ul>
                        <li><a href="http://localhost/project/hp1.html">Home</a></li>
                        <li><a href="http://localhost/project/blogs.html">Blogs</a></li>
                        <li><a href="http://localhost/project/about.html">About us</a></li>
                        <li><a href="http://localhost/project/contact.html">Contact us</a></li>
                        <li><a href="http://localhost/project/signin.php">Login</a></li>
                        </ul>
                </div>
            </nav>
</section>
<form method=POST action=http://localhost/project/register.php>
    <h2><u>Sign Up</u></h2><hr>
    <?php
    if($showAlert)
    {
        echo "<div class='success'>Successfull!You can login now</div>";
        /*echo '<strong>Successfull!</strong>You can login now';*/
    }
    if($showError)
    {
/*echo "<style='margin:20px 0;font-size:20px;font-weight:bold;background:rgb(211,211,211,0.5);
     color:rgb(220,20,60);text-align: center;padding:1px;'>*/
     echo "<div class='error-msg'>Error !".$showError."</div>";
        /*echo '<strong>Error !</strong>'.$showError;*/
    }
    ?>
<div class="input-group">
<label>Your Name</label>
<input type=text name=name required>
</div>
<!--<div class="input-group">
<label>Gender</label></div>
<div class="tick-mark">
<label><input type="radio" name=gen value=male>Male</label>
<label><input type="radio" name=gen value=female>Female</label>
<label><input type="radio" name=gen value=other>Other</label>
</div-->

<div class="input-group">
<label>Phone no.</label>
<input type=text name=ph required>
</div>
<div class="input-group">
<label>Email id</label>
<input type=email name=email required>
</div>
<div class="input-group">
<label>DOB</label>
<input type=date name=dob placeholder=yyyy/mm/dd>
</div>
<div class="input-group">
<label>Password</label>
<input type=password name=pass1 required>
</div>
<div class="input-group">
<label>Confirm Password</label>
<input type=password name=pass2 required>
</div>
<!--
<div class="input-group">
<label>Choose the type</label>
<select name="type">
<option value="user">User</option>
<option value="admin">Admin</option>
</select>
</div>
-->
<div class="input-group">
<button type=submit name=register class=btn>Sign up</button>
<p>Already have an account? <a href="signin.php">Login</a></p>
</div>
</form></body></html>