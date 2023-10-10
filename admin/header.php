<?php

// Set the session expiry time to 30 minutes (1800 seconds)


// Set the session expiry time to 30 minutes (1800 seconds)
$session_expiry_time = 1800;
session_set_cookie_params($session_expiry_time);
session_start();

// Check if the session has expired
if (isset($_SESSION['expiry_time']) && $_SESSION['expiry_time'] < time()) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session.
    session_destroy();

    // Redirect to login page
    header("location: login.php");
    exit;
}

// Update the session expiry time
$_SESSION['expiry_time'] = time() + $session_expiry_time;

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["logout"]) && $_POST["logout"] == true) {
        // Unset all of the session variables
        $_SESSION = array();

        // Destroy the session.
        session_destroy();

        // Redirect to login page
        header("location: login.php");
        exit;
    }
}

?>



<header>
<head>
	<title>Admin Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<!-- Font Awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<nav style="background-color:#34AD54 !important"class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Admin Dashboard</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="all_posts.php">Post</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="employees.php">Employees</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="showchart.php">Analytics</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Settings</a>
					</li>
					<li class="nav-item">
						<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
							<input type="hidden" name="logout" value="true">
							<button type="submit" class="btn btn-danger nav-link">Log Out <i class="fas fa-sign-out-alt"></i></button>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
	<!-- Font Awesome JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</header>
