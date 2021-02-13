<?php
session_start();
if(strlen($_SESSION['uid'])=="")
{
  header('location:logout.php');
} else {

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome user!</title>
    <link rel="stylesheet" href="style.css" />
    <script src="validimikodit.js"></script>

</head>
<body>

    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">DE</span>Digital Marketing</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="sherbimet.html">SHERBIMET</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="Register.php">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="newsletter">
        <div class="container">
            <h1>Miresevini ne faqen tone : <?php echo $_SESSION['fname'];?> </h1> 
            <form>
                <button type="submit" class="button_1">Merr Oferten</button>
            </form>
        </div>
    </section>
<form class="form-horizontal" action='' method="POST">
  <fieldset>
   

    <div class="control-group" align="center">
      <div class="controls">
        <a href="logout.php" class="btn btn-success" type="submit" name="signin">Logout</a>
      </div>
    </div>

  </fieldset>
</form>
<footer>
        <p>DE Digital Marketing, Copyright &copy; 2020/2021</p>
    </footer>

</body>
</html>
<?php } ?>