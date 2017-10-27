<?php

	$queryResult = $pdo->query("SELECT * FROM users");


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>practice PHP and MySQL</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Databases</h1>
		<a href="index.php">home</a>
		<br>
		<br>
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php 

				while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
					echo '<tr>';
					echo '<td>' . $row['name'] . '</td>';
					echo '<td>' . $row['email'] . '</td>';
					echo '<td><a href="update.php?id=' . $row['id'] . '">Edit</a></td>';
					echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
					echo '</tr>';
				}

			 ?>
		</table>
	</div>
</body>
</html>