<?php
include "config.php";

if(isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // Retrieve the post from the database
    $query = "SELECT * FROM posts WHERE id = $post_id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        // Display the post details
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $content = $row['content'];
        $image_path = 'http://localhost/DAR/admin/uploads/' . $row['image'];
        $timestamp = $row['timestamp'];
        $formatted_date = date('M d, Y', strtotime($timestamp));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?> | Your Blog</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Navbar -->
    <?php include "header.php"; ?>
    <!-- End Navbar -->

    <!-- Blog Post -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="blog-post">
                    <img class="img-fluid mb-3" src="<?php echo $image_path; ?>" alt="<?php echo $title; ?>">
                    <h2><?php echo $title; ?></h2>
                    <p class="text-muted"><?php echo $formatted_date; ?></p>
                    <p><?php echo $content; ?></p>
                    <div class="mt-3">
    <a href="edit_post.php?id=<?php echo $post_id; ?>" class="btn btn-primary me-2"><i class="fas fa-edit"></i> Edit</a>
    <a href="delete_post.php?id=<?php echo $post_id; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
</div>

                </div>
            </div>
        </div>
    </div>

    <!-- End Blog Post -->

    <!-- Footer -->

    <!-- End Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php
    } else {
        // If no post was found with the given ID, display an error message
        echo "<p>No post found with ID $post_id.</p>";
    }
} else {
    // If no ID was provided in the URL, redirect the user to the homepage
    header("Location: index.php");
    exit();
}
?>
