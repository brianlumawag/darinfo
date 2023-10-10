<!DOCTYPE html>
<html lang="en">
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


<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- SwiperJS CSS -->

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=YOUR_APP_ID&autoLogAppEvents=1" nonce="JzTnTQEy"></script>

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
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Activity Detail</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="" class="btn btn-secondary py-md-3 px-md-5">Blog Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="blog-post">
                    <img class="img-fluid mb-3" src="<?php echo $image_path; ?>" alt="<?php echo $title; ?>">
                    <h2><?php echo $title; ?></h2>
                    <p class="text-muted">Uploaded on <?php echo $formatted_date; ?></p>
                    <p style="text-align:justify;color:black"><?php echo $content; ?></p>
                    <div class="mt-3">
                      <div class="fb-share-button" data-href="http://localhost/DAR/view_post.php?id=<?php echo $post_id; ?>" data-layout="button_count" data-size="small">
                         </div>
</div>

  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId            : '661495798795522',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v13.0'
      });
    };
  </script>

                </div>
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
