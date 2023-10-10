<?php

// Set database credentials
$host = "localhost";
$username = "root1";
$password = "root";
$database = "dar_db";

// Create database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
