<!DOCTYPE html>
<html lang="en">

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
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Activities</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="" class="btn btn-secondary py-md-3 px-md-5">Blog Grid</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
  <div class="row g-5">
    <?php include"config.php" ?>

<?php
  // Retrieve total number of posts
  $query_count = "SELECT COUNT(*) as count FROM posts";
  $result_count = mysqli_query($conn, $query_count);
  $row_count = mysqli_fetch_assoc($result_count);
  $total_posts = $row_count['count'];

  // Define number of posts per page
  $posts_per_page = 6;

  // Calculate total number of pages
  $total_pages = ceil($total_posts / $posts_per_page);

  // Get current page number
  if (isset($_GET['page'])) {
    $current_page = $_GET['page'];
  } else {
    $current_page = 1;
  }

  // Calculate offset
  $offset = ($current_page - 1) * $posts_per_page;

  // Retrieve posts for the current page
  $query = "SELECT * FROM posts ORDER BY timestamp DESC LIMIT $offset, $posts_per_page";
  $result = mysqli_query($conn, $query);

  // Loop through each post and display it
  while ($row = mysqli_fetch_assoc($result)) {
    $post_id = $row['id'];
    $title = $row['title'];
    $content = $row['content'];
    $image_path ='http://localhost/DAR/admin/uploads/' . $row['image'];
    $timestamp = $row['timestamp'];
    $formatted_date = date('M d, Y', strtotime($timestamp));
?>
  <div class="col-md-6">
    <div class="blog-item position-relative overflow-hidden">
      <img class="img-fluid" src="<?php echo $image_path; ?>" alt="">
      <a class="blog-overlay" href="view_post.php?id=<?php echo $post_id; ?>">
        <h4 class="text-white"><?php echo $title; ?></h4>
        <span class="text-white fw-bold">Uploaded on <?php echo $formatted_date; ?></span>
      </a>
    </div>
  </div>
<?php } ?>
</div>
 <!-- Pagination -->
 <nav>
   <ul class="pagination justify-content-center mt-4">
     <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
       <li class="page-item <?php if ($i == $current_page) echo 'active'; ?>">
         <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
       </li>
     <?php } ?>
   </ul>
 </nav>
</div>





            <!-- Blog list End -->


            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
    <form action="search.php" method="GET">
        <div class="input-group">
            <input type="text" class="form-control p-3" name="search_query" placeholder="Keyword">
            <button type="submit" class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
        </div>
    </form>
</div>

                <!-- Search Form End -->

                <!-- Category Start -->

                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
  <h2 class="mb-4">Recent Post</h2>
  <div class="bg-primary p-4">
    <?php
      // Connect to database


      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Fetch blog posts
      $sql = "SELECT id, title, image FROM posts ORDER BY id DESC LIMIT 5";
      $result = mysqli_query($conn, $sql);

      // Loop through posts and display them
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="d-flex overflow-hidden mb-3">';
        echo '<img class="img-fluid flex-shrink-0" src="http://localhost/DAR/admin/uploads/'.$row['image'].'" style="width: 120px;height:120px" alt="'.$row['title'].'">';
        echo '<a style="font-size:12px !important" href="view_post.php?id='.$row['id'].'" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">'.$row['title'].'</a>';
        echo '</div>';
      }

      // Close database connection
      mysqli_close($conn);
    ?>
  </div>
</div>

                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="https://scontent.fmnl30-2.fna.fbcdn.net/v/t39.30808-6/301551460_2291317341033742_2606811553370168332_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeF37LQ9sha9pnmX8ZxmcCHblL-3yCmTpsOUv7fIKZOmw9p78dflJs_wLytiVycg382l_T-mLs4WI7LemZuOVcC-&_nc_ohc=NZyeIVt-o6oAX8SKtia&_nc_ht=scontent.fmnl30-2.fna&oh=00_AfCjfxQiDYJoN6B0M6okJWIu8kd0nCD0kwdgxP0FUSLB9A&oe=64311229" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->

                <!-- Tags End -->

                <!-- Plain Text Start -->
                <div>
                    <h2 class="mb-4">Plain Text</h2>
                    <div class="bg-primary text-center text-white" style="padding: 30px;">
                        <p>"The Department of Agrarian Reform in Oriental Mindoro is a testament to the government's commitment to uplifting the lives of our farmers and promoting sustainable agriculture in the province."</p>
                        <a href="" class="btn btn-secondary py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
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
