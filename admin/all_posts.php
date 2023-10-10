<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Posts | Your Blog</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
.no-underline {
    text-decoration: none;
}
</style>
<body>

    <!-- Navbar -->
    <?php include "header.php" ?>
    <!-- End Navbar -->

    <!-- Blog List -->
    <div class="container py-5">
        <a href="add_blog.php" class="btn btn-primary me-2"><i class="fas fa-edit"></i>Add Post</a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            // Retrieve all posts from the database
            $query = "SELECT * FROM posts ORDER BY timestamp DESC";
            $result = mysqli_query($conn, $query);

            // Check if there are any posts
            if (mysqli_num_rows($result) > 0) {
                // Loop through each post and display it
                while ($row = mysqli_fetch_assoc($result)) {
                    $post_id = $row['id'];
                    $title = $row['title'];
                    $content = $row['content'];
                    $image_path = 'http://localhost/DAR/admin/uploads/' . $row['image'];

                    $timestamp = $row['timestamp'];
                    $formatted_date = date('M d, Y', strtotime($timestamp));
                    ?>
                    <div class="col">
                        <div class="blog-item position-relative overflow-hidden">
                            <img  style="height:400px;width:400px"class="img-fluid" src="<?php echo $image_path; ?>" alt="<?php echo $title; ?>">
                            <a class="blog no-underline" href="view_post.php?id=<?php echo $post_id; ?>">
                                <h4 class="text-black"><?php echo $title; ?></h4>
                                <span class="text-black fw-bold"><?php echo $formatted_date; ?></span>
                            </a>
                        </div>
                    </div>
            <?php
                }
            } else {
                // If there are no posts, display a message
                echo "<div class='col-12'><p>No posts found.</p></div>";
            }
            ?>
        </div>

    </div>

    <!-- Footer -->

    <!-- End Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

</body>

</html>
