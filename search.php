<!DOCTYPE html>
<html lang="en">
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

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php include 'header.html'; ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include 'navigation.html'; ?>
    <!-- Navbar End -->


    <!-- Hero Start -->
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
    <!-- Blog End -->


    <!-- Footer Start -->
      <?php include 'footer.html'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
