<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Attempt to log in with user input
    $error = login($conn, $username, $password);

    // If there is an error, set it as a session variable
    if ($error) {
        $_SESSION["error"] = $error;
    }
}

function login($conn, $username, $password) {
    // Sanitize user input
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query database for user with matching username and password
    $query = "SELECT * FROM admin_users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    // Check if there is a matching user in the database
    if (mysqli_num_rows($result) == 1) {
        // User is authenticated - create session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        // Redirect to admin dashboard
        header("location: index.php");
        exit();
    } else {
        // Authentication failed - set error message and return to login page
        $error = "Invalid username or password.";
        return $error;
    }
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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

		input[type="text"], input[type="password"] {
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
	<div class="container">
		<h1>Admin Login</h1>
		<form action="" method="post">
			<?php if(isset($error)) { ?>
				<span><?php echo $error; ?></span>
			<?php } ?>
			<label for="username">Username</label>
			<input type="text" id="username" name="username" placeholder="Enter your username">

			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder="Enter your password">

			<button type="submit">Login</button>
		</form>
    

	</div>
</body>
</html>
