<?php
session_start();
include_once('function.php');
$usercredentials=new DB_con();
if(isset($_POST['signin']))
{
    $uname=$_POST['username'];
    $pasword=md5($_POST['password']);
    $ret=$usercredentials->signin($uname,$pasword);
    $num=mysqli_fetch_array($ret);
 
    if($num>0)
    {
        $_SESSION['uid']=$num['id'];
        $_SESSION['fname']=$num['FullName'];
        echo "<script>window.location.href='welcome.php'</script>";
    }
else
    {
    echo "<script>alert('Invalid details. Please try again');</script>";
    echo "<script>window.location.href='login.php'</script>";
    }
    }  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DE Digital Marketing | Login</title>
    <link rel='stylesheet' href='style.css' type='text/css' />
<header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">DE</span>Digital Marketing</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="blog.html">Products</a></li>
                    <li><a href="sherbimet.html">SHERBIMET</a></li>
                    <li class="current"><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </nav>
        </div>
</header>
</head>

<body>
    <center>
<form class="form-horizontal" action='' method="POST">
  <fieldset>
  <div id="formulari2">
        <h1><b>Formulari i Sign In</b></h1>
    </div>

<div class="control-group">
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge" required="true">
      </div>
    </div>


    <div class="control-group">
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required="true">
      </div>
    </div>
    

    <br>
    <div class="control-group">
      <div class="controls">
        <button class="btn btn-success" type="submit" name="signin">Signin</button>
      </div>
    </div>

    <div class="control-group">
      <div class="controls">
        <!-- Sjeni regjistruar? --> Not registered?  <a href="register.php">Register Here</a> 
      </div>
    </div>

    </fieldset>
</form>
</center>
<footer>
        <p>DE Digital Marketing, Copyright &copy; 2020/2021</p>
    </footer>
</body>
</html>