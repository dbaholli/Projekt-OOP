<?php
include_once('function.php');

$userdata=new DB_con();
if(isset($_POST['submit']))
  {
      $fname=$_POST['fullname'];
      $uname=$_POST['username'];
      $uemail=$_POST['email'];
      $pasword=md5($_POST['password']);
      $sql=$userdata->registration($fname,$uname,$uemail,$pasword);

    if($sql)
    {
      echo "<script>alert('Jeni regjistruar ne databaze me sukses.');</script>";
      echo "<script>window.location.href='login.php'</script>";
    }
    else
    {
      echo "<script>alert('Nuk jeni regjistruar. Provo prap me te dhenat korrekte!');</script>";
      echo "<script>window.location.href='login.php'</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>DE Digital Marketing | Register</title>
    <link rel='stylesheet' href='style.css' type='text/css' />
    <script src="assests/jquery-1.11.1.min.js"></script>
    <script>
    function checkusername(va) {
      $.ajax({
      type: "POST",
      url: "check_availability.php",
      data:'username='+va,
      success: function(data){
      $("#usernameavailblty").html(data);
      }
      });
}
</script>
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
                    <li><a href="login.php">Login</a></li>
                    <li class="current"><a href="register.php">Register</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                </ul>
            </nav>
        </div>
    </header>
</head>

<div id="formulari">
        <h1><b>Formulari i Regjistrimit</b></h1>
    </div>
<body>
    <center>
<form class="form-horizontal" action='' method="POST">
  
    

<div class="control-group">
      <label class="control-label"  for="username">Name</label>
      <div class="controls">
        <input type="text" id="username" name="fullname" placeholder="" class="input-xlarge" required="true">
      </div>
    </div>


    <div class="control-group">
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
<input type="text" id="username" name="username" onblur="checkusername(this.value)" class="input-xlarge" required="true">
          <span id="usernameavailblty"></span>
      </div>
    </div>
 
    <div class="control-group">
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="email" id="email" name="email" placeholder="" class="input-xlarge" required="true">
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
            <select name="role" class="control-control">
                <option>Specifiko rolin</option>
                <option value="standard_user">User i thjeshte</option>
                <option value="admin">Admin</option>
            </select>
        </div>

    <br>
    <div class="control-group">
      <div class="controls">
        <button class="btn btn-success" type="submit" id="submit" name="submit">Register</button>
      </div>
    </div>

 <div class="control-group">
      <div class="controls">
       Nese keni account -> <a href="login.php">Signin</a>
      </div>
    </div>

  
</form>

</center>
<footer>
        <p>DE Digital Marketing, Copyright &copy; 2020/2021</p>
    </footer>
</body>
</html>