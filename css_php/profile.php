<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="stylee.css">
    <title>Document</title>
</head>

<body >
	<header>
		<nav class="navtop">
			<div>
				<h1><i class="fab fa-yoast"></i>YouChat</h1>
			</div>
			<div class="navv">
				<a href="Read.php"><i class="fas fa-user-cog"></i>Admin</a>
				<a href="home.php"><i class="fas fa-comments"></i>Chat</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
	</header>
	<main>
		<div class="title">
			<h2>Profile Account : <?= $_SESSION["pseudo"] ?> <i class="far fa-laugh-wink"></i></h2>
		</div>
		<table>
			<thead>
				<tr>
					<th>Username</th>
					<th>pseudo</th>
					<th>Password</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td data-td="Username :"><?= $_SESSION['username'] ?></td>
					<td data-td="pseudo :"><?= $_SESSION["pseudo"] ?></td>
					<td data-td="Password :"><?= $_SESSION["password"] ?></td>
					<td data-td="Email :"><?= $_SESSION["email"] ?></td>
				</tr>
			</tbody>
		</table>
	</main>
</body>

</html>