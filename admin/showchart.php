
<?php
  $servername = "localhost"; // Replace with your server name
  $username = "root"; // Replace with your MySQL username
  $password = ""; // Replace with your MySQL password
  $dbname = "dar_db"; // Replace with your database name

  // Create a connection to the database
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check if the connection was successful
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Select all comments from the database
  $sql = "SELECT * FROM comments";
  $result = mysqli_query($conn, $sql);

  // Initialize counters for positive and negative comments
  $positive_count = 0;
  $negative_count = 0;
  $neutral_count = 0;

  // Loop through the comments and update the counters
  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          $comment = $row["rate"];
          if (strpos($comment, "Positive") !== false) {
              $positive_count++;
          } elseif (strpos($comment, "Negative") !== false) {
              $negative_count++;
          }
          elseif (strpos($comment, "Neutral") !== false) {
              $neutral_count++;
          }
      }
  }

  // Calculate the total number of comments
  $total_comments = $positive_count + $negative_count+ $neutral_count;

  // Calculate the positive and negative comment percentages
  $positive_percentage = ($positive_count / $total_comments) * 100;
  $negative_percentage = ($negative_count / $total_comments) * 100;
  $neutral_percentage = ($neutral_count / $total_comments) * 100;
  ?>

<html>
<head>
  <title>Comment Sentiment</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    canvas {
      display: block;
      margin: 20px auto;
    }

    p {
      font-size: 16px;
      margin: 20px 0;
    }

    .percentage {
      font-size: 22px;
      font-weight: bold;
      margin-left: 10px;
    }

    .positive {
      color: green;
    }

    .negative {
      color: red;
    }
    .neutral
    {
      color: gray;
    }

     .comments-container {
      margin: 20px 0;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
    }

    .comment {
      margin: 10px 0;
      padding: 10px;
      background-color: white;
      border-radius: 5px;
      box-shadow: 1px 1px 5px #ccc;
    }

    .comment-header {
      font-weight: bold;
    }

    .comment-body {
      margin-top: 10px;
    }

    .comment-rating {
      font-style: italic;
      margin-top: 10px;
    }
    .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
  </style>
</head>
<body>
  <?php include'header.php'?>

  <h1>Comment Sentiment</h1>
  <canvas id="myChart" width="400" height="400"></canvas>
  <p>Positive comments: <span class="positive percentage"><?php echo round($positive_percentage, 2) . "%"; ?></span></p>
  <p>Negative comments: <span class="negative percentage"><?php echo round($negative_percentage, 2) . "%"; ?></span></p>
  <p>Neutral comments: <span class="neutral percentage"><?php echo round($neutral_percentage, 2) . "%"; ?></span></p>


 <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Positive', 'Negative','Neutral'],
        datasets: [{
          data: [<?php echo $positive_percentage; ?>, <?php echo $negative_percentage; ?>,<?php echo $neutral_percentage; ?>],
          backgroundColor: ['green', 'red','gray']
        }]
      },
      options: {
        responsive: false
      }
    });
  </script>

  <div class="comments-container">
    <h2>Comments</h2>

    <?php
    if (isset($_GET["message"])) {
        // Display the message as an alert
        echo '<div class="alert">' . htmlspecialchars($_GET["message"]) . '</div>';
    }

    // Reset the result set back to the first row
    mysqli_data_seek($result, 0);

    // Loop through the comments and display them
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $comment = $row["comment"];
            $rating = $row["rate"];
            $status = $row["status"];

            ?>

            <div class="comment">
                <div class="comment-header">
                    <?php echo $name; ?>
                </div>
                <div class="comment-body">
                    <?php echo $comment; ?>
                </div>
                <div class="comment-rating">
                    Rating: <?php echo $rating; ?>
                </div>
                <div class="comment-status">
                    Status: <?php echo $status; ?>
                </div>
                <div class="comment-actions">
                    <form method="POST" action="delete_comment.php">
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                        <button type="submit">Delete</button>
                    </form>
                    <form method="POST" action="update_status.php">
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                        <input type="hidden" name="status" value="<?php echo $status == 'Posted' ? 'Not Posted' : 'Posted'; ?>">
                        <button type="submit"><?php echo $status == 'Posted' ? 'Remove Post' : 'Post'; ?></button>
                    </form>
                </div>
            </div>
            <?php
        }
    } else {
        echo "No comments yet.";
    }
    ?>

</div>

   <a href="http://localhost/DAR/admin/showchart.php" class="button">Generate PDF</a>

</body>
</html>
