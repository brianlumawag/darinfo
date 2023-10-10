<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<style>
		body {
			background-image: url('https://www.westend61.de/images/0001478531pw/beautiful-sunset-in-a-rice-field-hand-holding-rice-ears-or-plant-close-up-in-a-rice-field-with-sun-flare-and-blurred-background-CAVF90541.jpg');
			font-family: Arial, sans-serif;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.container {
			margin: 0 auto;
			width: 400px;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			margin-top: 100px;
		}

		h1 {
			text-align: center;
			color: black;
			margin-top: 0;
		}

		input[type="password"] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		button {
			background-color: #4CAF50;
			color: #fff;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
			font-size: 16px;
		}

		button:hover {
			background-color: #45a049;
		}

		span {
			color: red;
			font-weight: bold;
			display: block;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<?php include'header.php'?>
	<div class="container">
		<h1>Change Password</h1>
		<form action="update_password.php" method="post">
			<?php if(isset($error)) { ?>
				<span><?php echo $error; ?></span>
			<?php } ?>
			<label for="current_password">Current Password</label>
			<input type="password" id="current_password" name="current_password" placeholder="Enter your current password">

			<label for="new_password">New Password</label>
			<input type="password" id="new_password" name="new_password" placeholder="Enter your new password">

			<label for="confirm_password">Confirm New Password</label>
			<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your new password">

			<button type="submit">Change Password</button>
		</form>
	</div>
</body>
</html>
