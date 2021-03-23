<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Profile Page</title>
	<link href="stylee.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body class="loggedin">
	<nav class="navtop">
		<div>
			<h1><i class="fab fa-yoast"></i>YouChat</h1>
			<a href="Read.php"><i class="fas fa-id-badge"></i>Admin</a>
			<a href="home.php"><i class="fas fa-comments"></i>YourChat</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
		</div>
	</nav>
	<div class="content">
		<h2>Your Profile Account Details</h2>
	</div>
	<div>
		<table>
			<tr>
				<td>Username:</td>
				<td><?php echo $_SESSION['username'] ?></td>
			</tr>
			<tr>
				<td>pseudo:</td>
				<td><?php echo $_SESSION["pseudo"] ?></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><?php echo $_SESSION["email"] ?></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><?php echo $_SESSION["password"] ?></td>
			</tr>
		</table>
	</div>
</body>

</html>