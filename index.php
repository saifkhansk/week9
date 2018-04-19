<?php
	require_once('database.php');
	require_once('users_db.php');
	require_once('users.php');
	$users = UsersDB::getUsers();
?>
<html>
	<head>
		<title>Week 13 Assign ment</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<table align="center" width="400" class="user-table">
			<tr>
				<th>ID</th>
				<th>email</th>
				<th>fname</th>
				<th>lname</th>
				<th>phone</th>
				<th>birthdate</th>
				<th>gender</th>
				<th>password</th>
			</tr>	
			<?php foreach ($users as $user) : ?>
				<?php echo $user->displayUserRow(); ?>
			<?php endforeach; ?>		
		</table>
	</body>		
</html>