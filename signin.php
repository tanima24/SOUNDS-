<?php
$login=false;
$showError=false;
if($_SERVER['REQUEST_METHOD']=="POST")
{
include("connection.php");

  $name=$_POST['name'];
  $pass1=$_POST['pass1'];
  //$type="";
 // $t=$type;
  
    $q1="select * from User where user_name='$name' AND password='$pass1'";
    $q2=mysqli_query($db,$q1);
    while($m3=mysqli_fetch_array($q2)) 
	   {	
           $t=$m3[6];
       }
    //$result=mysqli_query($db,$q1);
    //$num=mysqli_num_rows($result);
    $num=mysqli_num_rows($q2);
    //echo "registration successful";
    
    /*if($num == 1)
    {
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['name']=$name;
        header("location:http://localhost/project/newww 8.php");
    }*/
    if($num == 1)
    {
        $login=true;
        session_start();
        if($t=="admin")
        {
            //echo "welcome admin";
            $_SESSION['loggedin']=true;
            $_SESSION['name']=$name;
            $name6=$_SESSION['name'];
            //$current_date=date("Y-m-d H:i:s",time());
            $nm=0;
            //$time=now();
            $sql1="select id from user where user_name='".$name6."';";
            $rs=mysqli_query($db,$sql1);
            while($m4=mysqli_fetch_array($rs)) 
               {	
                   //$nm=$m4[0];
					$_SESSION['id']=$m4[0];
                   
               }
           header("location:http://localhost/project/CrudeOper.php?");

        }
        else if($t=="user")
        {
            //echo "welcome user";
            $_SESSION['loggedin']=true;
            $_SESSION['name']=$name;
            $name6=$_SESSION['name'];
            //$current_date=date("Y-m-d H:i:s",time());
            $nm=0;
            //$time=now();
            $sql1="select id from user where user_name='".$name6."';";
            $rs=mysqli_query($db,$sql1);
            while($m4=mysqli_fetch_array($rs)) 
               {	
                   $nm=$m4[0];
                  
                   
               }
           // $sql="insert into report(id,intime) values(".$nm.",'".$current_date."');";
           $sql="insert into report(id,intime) values(".$nm.",now());";
            mysqli_query($db,$sql);
            $v="select * from report order by r_id DESC LIMIT 1;";
            $rs1=mysqli_query($db,$v);
            while($m5=mysqli_fetch_array($rs1)) 
               {	
                $rid=$m5[0];
                $_SESSION['id']=$rid;
				echo $_SESSION['id'];
               }
           header("location:http://localhost/project/newww 8.php");

        }
        /*if(strcmp($type,"user")==0)
        {
            $_SESSION['loggedin']=true;
            $_SESSION['name']=$name;
           header("location:http://localhost/project/welcome.php");
        }*/
    }

else
{
    $showError="Incorrect username or password";
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
<form method="POST" action="signin.php">
<h2><u>Login</u></h2><hr>
<?php

if($login)
{
    echo "<div class='success'>Successfull!You are logged in</div>";
}


if($showError)
    {
        echo "<div class='error-msg'>Error !".$showError."</div>";
    }

?>
<div class="input-group">
<label>Username</label>
<input type=text name=name required>
</div>
<div class="input-group">
<label>Password</label>
<input type=password name=pass1 required>
</div>
<div class="input-group">
<button type=submit name=login class=btn>Login</button>
<p>Don't have an account? <a href="register.php">Sign up</a></p>
</div>
</form></body></html>