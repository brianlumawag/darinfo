<?php
    // Include config file
    require_once "config.php";

    // Define variables and initialize with empty values
    $keyword = "";

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Validate keyword
        if(empty(trim($_POST["keyword"]))){
            echo "Please enter a keyword.";
        } else{
            $keyword = trim($_POST["keyword"]);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <?php include 'header.html'?>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h1 class="display-5">Search Results</h1>
            </div>
            <div class="row g-5">
                <?php
                    // Retrieve posts that contain the keyword
                    $query = "SELECT * FROM posts WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%' ORDER BY timestamp DESC";
                    $result = mysqli_query($conn, $query);

                    // Check if there are any posts that contain the keyword
                    if(mysqli_num_rows($result) == 0){
                        echo "<p>No results found.</p>";
                    } else {
                        // Loop through each post and display it
                        while ($row = mysqli_fetch_assoc($result)) {
                            $post_id = $row['id'];
                            $title = $row['title'];
                            $content = $row['content'];
                            $image_path ='http://localhost/DAR/admin/uploads/' . $row['image'];

                            $timestamp = $row['timestamp'];
                            $formatted_date = date('M d, Y', strtotime($timestamp));
                ?>
                            <div class="col-lg-4">
                                <div class="blog-item position-relative overflow-hidden">
                                    <img class="img-fluid" src="<?php echo $image_path; ?>" alt="">
                                    <a class="blog-overlay" href="view_post.php?id=<?php echo $post_id; ?>">
                                        <h4 class="text-white"><?php echo $title; ?></h4>
                                        <span class="text-white fw-bold"><?php echo $formatted_date; ?></span>
                                    </a>
                                </div>
                            </div>
                <?php
                        } // End of while loop
                    } // End of else statement
                ?>
            </div>
        </div>
    </div>
<?php include 'footer.html'?>
    <!-- Bootstrap 4.5.2 JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
