<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About</title>
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
                    <h1 class="display-1 text-white mb-md-4">About Us</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="" class="btn btn-secondary py-md-3 px-md-5">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <div style="max-width: 800px; margin: 0 auto; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; overflow: hidden;">
      <iframe width="100%" height="450" src="https://www.youtube.com/embed/D2EDF9sSDdA" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
    </div>


    <!-- About Start -->
    <div class="container-fluid about pt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="d-flex h-100 border border-5 border-primary border-bottom-0 pt-4">
                        <img style="height:1000px" class="img-fluid mt-auto mx-auto" src="img/testi.jpg">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <div class="mb-3 pb-2">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5">Mandate, Mission and Vision</h1>
                    </div>
                    <div class="row gx-9 gy-8">
                        <div class="col-sm-12">
                            <i class="fa fa-seedling display-1 text-secondary"></i>
                            <h4>Mandate and Functions</h4>
                            <p class="mb-0">To lead in the implementation of the Comprehensive Agrarian Reform Program (CARP) through Land Tenure Improvement (LTI), Agrarian Justice and Coordinated delivery of essential Support Services to client beneficiaries.</p>
<br>
                            <ul>
  <li>To provide Land Tenure security to landless farmers through land acquisition and distribution; leasehold arrangements’ implementation and other LTI services;</li>
  <li>To provide legal intervention to Agrarian Reform Beneficiaries (ARBS) through adjudication of agrarian cases and agrarian legal assistance;</li>
  <li>To implement, facilitate and coordinate the delivery of support services to ARBs through Social Infrastructure and Local Capability Building (SILCAB); Sustainable Agribusiness and Rural Enterprise Development (SARED); and Access Facilitation and Enhancement Services (AFAES).</li>
</ul>
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-award display-1 text-secondary"></i>
                            <h4>Vision</h4>
                            <p class="mb-0">A just, safe and equitable society that upholds the rights of tillers to own, control, secure, cultivate and enhance their agricultural lands, improve their quality of life towards rural development and national industrialization.</p>
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-award display-1 text-secondary"></i>
                            <h4>Mission</h4>
                            <p class="mb-0">DAR is the lead government agency that upholds and implements comprehensive and genuine agrarian reform which actualizes equitable land distribution, ownership, agricultural productivity, and tenurial security for, of and with the tillers of the land towards the improvement of their quality of life.</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

  <?php require_once('visitor_counter.php');?>
    <!-- Facts Start -->
    <div class="container-fluid bg-primary facts py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Projects</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">100</h1>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Daily Visitors</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up"><?php echo $count; ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">ARC's</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">17</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Daily Visitors</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up"><?php echo $count; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">The Team</h6>
                <h1 class="display-5">Oriental Mindoro Provincial Office</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                              <img class="img-fluid w-100" src="img/team-1.png" alt="">
                              <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                  <h4 class="text-white">ENGR. ROGELIO D. MADARCOS, CESE</h4>
                                  <span class="text-white">OIC-Provincial Agrarian Reform Program Officer II</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                              <a class="btn btn-square rounded-circle bg-white" href="mailto:parpo2.orientalmindoro@dar.gov.ph"><i class="bi bi-envelope-open text-secondary"></i></a>

                              <a class="btn btn-square rounded-circle bg-white" href="sms:043-288-6162"><i class="bi bi-telephone text-secondary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">

                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


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
