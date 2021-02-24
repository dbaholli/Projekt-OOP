<?php
include_once 'function.php';

if (isset($_POST['add_user'])) {
    $name = $_POST['name'];
    $surname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pw'];

    $query = $sql = ('SELECT * FROM users WHERE email = :email');
    $query->bindValue(":email", $email);
    $query->execute();
    $user = $query->fetch();

    $userEmail = $user['email'] ?? null;

    if ($counter === 0) {
        $query = $sql->prepare('INSERT INTO users (name, lastname, email, password) 
                                   VALUES (:name, :surname, :email, :password)
                                   ');
        $query->bindValue(":name", $name);
        $query->bindValue(":surname", $surname);
        $query->bindValue(":email", $email);
        $query->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));

        $query->execute();
        $registerSuccess = "You have successfully registered the user.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet" />

    <title>Add User</title>
</head>
<style>
* {
    padding: 0;
    margin: 0;
    /* outline: 1px solid black; */
  }
  .wrapper {
    background-color: #F0F8FF;
    width: 100%;
    height: 655px;
  
    font-family: "Montserrat", sans-serif;
  }
  .header {
    display: flex;
    justify-content: space-between;
    width: 92%;
  
    padding: 2%;
  }
  .header h1 {
    font-family: "Dancing Script", cursive;
    font-size: 35px;
    width: 30%;
    margin: 1% 0 0 5%;
  }
  
  .header ul {
    display: flex;
    justify-content: flex-end;
    width: 95%;
  }
  
  .header ul a {
    text-decoration: none;
    color: black;
    font-size: 15px;
    font-weight: bold;
  }
  
  .header li {
    list-style: none;
    padding: 2%;
  }
  
  .header li:hover {
    background-color: #F0F8FF;
  }
  
  .main {
    display: flex;
    background-color: #F0F8FF;
    font-family: "Montserrat", sans-serif;
  }
  
  .main .left-side {
    width: 15%;
    text-align: center;
    margin-top: 10%;
  }
  .main .left-side ul li {
    list-style: none;
    padding: 15%;
  }
  .main .left-side ul li:hover {
    background-color: #F0F8FF;
  }
  .main .right-side {
    width: 85%;
    padding: 4%;
    text-align: center;
  }
  
  .main .right-side h3 {
    font-size: 25px;
    margin-bottom: 2%;
  }
  
  .main .right-side form label {
    display: inline-block;
    width: 100px;
  }
  
  .main .right-side input[type="text"],
  input[type="password"] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  .main .right-side input[type="submit"] {
    width: 10%;
    height: 50px;
    background-color: #e8491d;
    color: white;
    font-size: 20px;
    border-radius: 10px;
    border-color: #e8491d;
  
    margin-top: 2%;
  }
    </style>
<body>
<header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">DE</span>Digital Marketing</h1>
            </div>
            <nav>
                <ul>
					<li><a href="index.html">HOME</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="mesazhet.php">Mesazhet</a></li>
					<li><a href="cart.php">Cart</a></li>
					<li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
        <div class="main">
            <div class="right-side">
                <h3>Add User</h3>
                <form method="POST">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Your name"><br>

                    <label for="lastname">Lastname</label>
                    <input type="text" name="lname" placeholder="Your lastname"><br>

                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Your email"><br>

                    <label for="pw">Password</label>
                    <input type="password" name="pw" placeholder="Your password"><br>

                    <input type="submit" value="Add" name="add_user">
                </form>
                <?php
                if (isset($_POST['add_user']) && $counter === 0) {
                    echo $registerSuccess;
                }
                ?>
            </div>
        </div>
    </div>
    </div>
</body>

</html>