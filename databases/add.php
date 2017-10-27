<?php 
	
	require_once 'config.php';

	$result = false;

	if (!empty($_POST)) {
		$name = $_POST['name'];
		$email = $_POST['email'];

	//never use md5 algoritmo

		$password = md5($_POST['password']);

		//validate

		$sql = "INSERT INTO users(name, email, password) VALUE(:name, :email, :password)";
		$query = $pdo->prepare($sql);

		$result = $query->execute([
			'name' => $name,
			'email' => $email,
			'password' => $password
		]);
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>practice PHP and MySQL</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Add user</h1>
		<a href="index.php">home</a>
		<?php 

		if ($result == true) {
			echo '<div class="alert alert-success">Success!!!</div>';
		}

		 ?>
		<form action="add.php" method="post">
			<label for="name">Name</label>
			<input type="text" name="name" id="name">
			<br>
			<label for="email">email</label>
			<input type="text" name="email" id="email">
			<br>
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
			<br>
			<input type="submit" value="save">
		</form>
	</div>
</body>
</html>