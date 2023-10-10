<?php
include('vendor/autoload.php');

use Sentiment\Analyzer;
$obj=new Analyzer();
require_once ('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get the form input values
  $name = $_POST['name'];
  $message = $_POST['comment'];
  $result = $obj->getSentiment($message);
  $status='Not Posted';

  // Determine the sentiment rating
  if ($result['neg'] > $result['pos']) {
    $rate = 'Negative';
  } elseif ($result['neg'] < $result['pos']) {
    $rate = 'Positive';
  } else {
    $rate = 'Neutral';
  }

  // Insert the form data into the database
  try {
    $dsn = 'mysql:host=localhost;dbname=dar_db';
    $username = 'root1';
    $password = 'root';

    $database = new PDO($dsn, $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $insert_query = "INSERT INTO comments (name, comment, rate,status) VALUES (?, ?, ?,?)";
    $insert = $database->prepare($insert_query);
    $insert->execute(array($name, $message, $rate, $status));

    // Redirect the user to the index page with a success message
    header('Location: index.php?status=success');
    exit();
  } catch (PDOException $e) {
    // Handle any database errors
    echo 'Error: ' . $e->getMessage();
  }
}
?>
