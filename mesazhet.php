<?php
include ('function.php');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$sql = "SELECT * FROM contact_us LIMIT 6;";
$result = $con->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
	<title>Dashboard</title>
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
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="mesazhet.php">Mesazhet</a></li>

                </ul>
            </nav>
        </div>
    </header>

    <h1 align="center">Mesazhet nga user-at.</h1>
    <p align="center">Mesazhe</p>

<table id="t01" border = "1" align = "center" style = "line-height:25px;">
<tr>
<th>UserID</th>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
</tr>
<?php
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		?>
		<tr>
		<td><?php echo $row['id']; ?> </td>
		<td><?php echo $row['name']; ?> </td>
		<td><?php echo $row['email']; ?> </td>
		<td><?php echo $row['subject']; ?> </td>
		<td><?php echo $row['msg']; ?> </td>
		</tr>
		<?php
	}
}
else
{
	?>
	<tr>
	<th colspan ="2">There is not data found here!</th>
	</tr>
	<?php
}
?>



</body>
</html>