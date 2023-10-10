<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Team</title>
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
                    <h1 class="display-1 text-white mb-md-4">The Team</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="" class="btn btn-secondary py-md-3 px-md-5">The Team</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Oriental Mindoro Provincial Office</h6>
                <h1 class="display-5">Office of the PARPO</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <?php
                require_once "config.php";
                // Retrieve all employees from database
                $sql = "SELECT * FROM employees WHERE division = 'Office of the PARPO'";
                $result = mysqli_query($conn, $sql);

                // Loop through each employee and display their information
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['name'];
                    $title = $row['title'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $image = $row['image'];
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                                <img class="img-fluid w-100" style="height:470px"src="http://localhost/DAR/admin/uploads/<?php echo $image ?>" alt="<?php echo $name ?>">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white"><?php echo $name ?></h4>
                                    <span class="text-white"><?php echo $title ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <?php if (!empty($email)): ?>
                                    <a class="btn btn-square rounded-circle bg-white" href="mailto:<?php echo $email ?>"><i class="bi bi-envelope-open text-secondary"></i></a>
                                <?php endif; ?>

                                <?php if (!empty($phone)): ?>
                                    <a class="btn btn-square rounded-circle bg-white" href="tel:<?php echo $phone ?>"><i class="bi bi-telephone text-secondary"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <div class="container-fluid py-5">
      <div class="container">
          <div class="mx-auto text-center mb-5" style="max-width: 1000px;">
              <h6 class="text-primary text-uppercase"></h6>
              <h1 class="display-5">Program Beneficiaries Development Division</h1>
          </div>
          <div class="row g-5 justify-content-center">
              <?php
              require_once "config.php";
              // Retrieve all employees from database
              $sql1 = "SELECT * FROM employees WHERE division = 'Program Beneficiaries Development Division' ORDER BY id ASC";

              $result1 = mysqli_query($conn, $sql1);

              // Loop through each employee and display their information
              while ($row = mysqli_fetch_assoc($result1)) {
                  $name = $row['name'];
                  $title = $row['title'];
                  $email = $row['email'];
                  $phone = $row['phone'];
                  $image = $row['image'];
              ?>
              <div class="col-lg-4 col-md-6">
                  <div class="row g-0">
                      <div class="col-10">
                          <div class="position-relative">
                              <img class="img-fluid w-100" style="height:470px"src="http://localhost/DAR/admin/uploads/<?php echo $image ?>" alt="<?php echo $name ?>">
                              <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                  <h4 class="text-white"><?php echo $name ?></h4>
                                  <span class="text-white"><?php echo $title ?></span>
                              </div>
                          </div>
                      </div>
                      <div class="col-2">
                          <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                              <?php if (!empty($email)): ?>
                                  <a class="btn btn-square rounded-circle bg-white" href="mailto:<?php echo $email ?>"><i class="bi bi-envelope-open text-secondary"></i></a>
                              <?php endif; ?>

                              <?php if (!empty($phone)): ?>
                                  <a class="btn btn-square rounded-circle bg-white" href="tel:<?php echo $phone ?>"><i class="bi bi-telephone text-secondary"></i></a>
                              <?php endif; ?>
                          </div>
                      </div>
                  </div>
              </div>
              <?php } ?>
          </div>
      </div>
  </div>


    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 700px;">
                <h6 class="text-primary text-uppercase"></h6>
                <h1 class="display-5">Land Tenure Services Division</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <?php
                require_once "config.php";
                // Retrieve all employees from database
                $sql = "SELECT * FROM employees WHERE division = 'Land Tenure Services Division'";
                $result = mysqli_query($conn, $sql);

                // Loop through each employee and display their information
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['name'];
                    $title = $row['title'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $image = $row['image'];
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                                <img class="img-fluid w-100" style="height:470px"src="http://localhost/DAR/admin/uploads/<?php echo $image ?>" alt="<?php echo $name ?>">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white"><?php echo $name ?></h4>
                                    <span class="text-white"><?php echo $title ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <?php if (!empty($email)): ?>
                                    <a class="btn btn-square rounded-circle bg-white" href="mailto:<?php echo $email ?>"><i class="bi bi-envelope-open text-secondary"></i></a>
                                <?php endif; ?>

                                <?php if (!empty($phone)): ?>
                                    <a class="btn btn-square rounded-circle bg-white" href="tel:<?php echo $phone ?>"><i class="bi bi-telephone text-secondary"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>      </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase"></h6>
                <h1 class="display-5">Legal Division</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <?php
                require_once "config.php";
                // Retrieve all employees from database
                $sql = "SELECT * FROM employees WHERE division = 'Legal Division'";
                $result = mysqli_query($conn, $sql);

                // Loop through each employee and display their information
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['name'];
                    $title = $row['title'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $image = $row['image'];
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                                <img class="img-fluid w-100" style="height:470px"src="http://localhost/DAR/admin/uploads/<?php echo $image ?>" alt="<?php echo $name ?>">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white"><?php echo $name ?></h4>
                                    <span class="text-white"><?php echo $title ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <?php if (!empty($email)): ?>
                                    <a class="btn btn-square rounded-circle bg-white" href="mailto:<?php echo $email ?>"><i class="bi bi-envelope-open text-secondary"></i></a>
                                <?php endif; ?>

                                <?php if (!empty($phone)): ?>
                                    <a class="btn btn-square rounded-circle bg-white" href="tel:<?php echo $phone ?>"><i class="bi bi-telephone text-secondary"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 ">
      <div class="container">
          <div class="mx-auto text-center mb-5" style="max-width: 700px;">
              <h6 class="text-primary text-uppercase"></h6>
              <h1 class="display-5">Support to Operations Division</h1>
          </div>
          <center>
          <div class="row g-5 justify-content-center">
            <?php
  require_once "config.php";
  // Retrieve all employees from database
  $sql = "SELECT * FROM employees WHERE division = 'Support to Operations Division'";
  $result = mysqli_query($conn, $sql);

  // Loop through each employee and display their information
  while ($row = mysqli_fetch_assoc($result)) {
      $name = $row['name'];
      $title = $row['title'];
      $email = $row['email'];
      $phone = $row['phone'];
      $image = $row['image'];
?>
      <div class="col-lg-4 col-md-6">
          <div class="row g-0">
              <div class="col-10">
                  <div class="position-relative">
                      <img class="img-fluid w-100" style="height:470px"src="http://localhost/DAR/admin/uploads/<?php echo $image ?>" alt="<?php echo $name ?>">
                      <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                          <h4 class="text-white"><?php echo $name ?></h4>
                          <span class="text-white"><?php echo $title ?></span>
                      </div>
                  </div>
              </div>
              <div class="col-2">
                  <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                      <?php if (!empty($email)): ?>
                          <a class="btn btn-square rounded-circle bg-white" href="mailto:<?php echo $email ?>"><i class="bi bi-envelope-open text-secondary"></i></a>
                      <?php endif; ?>

                      <?php if (!empty($phone)): ?>
                          <a class="btn btn-square rounded-circle bg-white" href="tel:<?php echo $phone ?>"><i class="bi bi-telephone text-secondary"></i></a>
                      <?php endif; ?>
                  </div>
              </div>
          </div>
      </div>
<?php } ?>

          </div>
      </div>
  </div>
</center>


    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase"></h6>
                <h1 class="display-5">DAR Municipal Office</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <?php
                require_once "config.php";
                // Retrieve all employees from database
                $sql = "SELECT * FROM employees WHERE division = 'DAR Municipal Office'";
                $result = mysqli_query($conn, $sql);

                // Loop through each employee and display their information
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['name'];
                    $title = $row['title'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $image = $row['image'];
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                                <img class="img-fluid w-100" style="height:470px"src="http://localhost/DAR/admin/uploads/<?php echo $image ?>" alt="<?php echo $name ?>">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white"><?php echo $name ?></h4>
                                    <span class="text-white"><?php echo $title ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <?php if (!empty($email)): ?>
                                    <a class="btn btn-square rounded-circle bg-white" href="mailto:<?php echo $email ?>"><i class="bi bi-envelope-open text-secondary"></i></a>
                                <?php endif; ?>

                                <?php if (!empty($phone)): ?>
                                    <a class="btn btn-square rounded-circle bg-white" href="tel:<?php echo $phone ?>"><i class="bi bi-telephone text-secondary"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>



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
