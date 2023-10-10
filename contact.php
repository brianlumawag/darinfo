<!DOCTYPE html>
<html lang="en">
<style>
    #map {
      height: 600px;
      width: 100%;
    }
  </style>

<head>
    <meta charset="utf-8">
    <title>Contact us</title>
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

<body onload="initMap()">
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
                    <h1 class="display-1 text-white mb-md-4">Contact Us</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Contact Us</h6>
                <h1 class="display-5">Please Feel Free To Contact Us</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-7">
                    <div class="bg-primary h-100 p-5">
                      <form method="POST" action="send_email.php">
                          <div class="row g-3">
                              <div class="col-6">
                                  <input type="text" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;" name="name">
                              </div>
                              <div class="col-6">
                                  <input type="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;" name="email">
                              </div>
                              <div class="col-12">
                                  <input type="text" class="form-control bg-light border-0 px-4" placeholder="Subject" style="height: 55px;" name="subject">
                              </div>
                              <div class="col-12">
                                  <textarea class="form-control bg-light border-0 px-4 py-3" rows="2" placeholder="Message" name="message"></textarea>
                              </div>
                              <div class="col-12">
                                  <button class="btn btn-secondary w-100 py-3" type="submit" name="submit">Send Message</button>
                              </div>
                          </div>
                      </form>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-secondary h-100 p-5">
                        <h2 class="text-white mb-4">Get In Touch</h2>
                        <div class="d-flex mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-geo-alt fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Our Office</h5>
                                <span class="text-white">DAR Provincial Office Oriental Mindoro Sixteen Enterprises Building, Masipit, Calapan City, Oriental Mindoro</span>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-envelope-open fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Email Us</h5>
                                <span class="text-white">darormin@gmail.com</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-phone-vibrate fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Call Us</h5>
                                <span class="text-white">+639166810426</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <div class="mx-auto text-center mb-5" style="max-width: 500px;">

        <h1 class="display-5">ARC's in <br>Oriental Mindoro</h1>
    </div>
    <div id="map"></div>

     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEOwa-yTQNajy47kZ9zYQHXuyileg3gQs&callback=initMap"></script>
     <script>
        function initMap() {
          var locations = [

            {lat: 13.397054539568378, lng: 121.18530213240928, title: 'PAGASA ARC ', content: '<b style="color:black">PAGASA ARC<br>Calapan City</b><br>Areas Covered:<br>Brgy. Guinobatan, Calapan City<br>Brgy. Palhi, Calapan City<br>Brgy. Sta.ISabel, Calapan City'},
            {lat: 13.392128756898554, lng: 121.07933337007019, title: 'Water ARC', content: '<b style="color:black">Water ARC<br>BACO</b><br>Areas Covered:<br>Brgy. Water, Baco<br>Brgy. Lumangbayan, Baco'},
            {lat: 13.097028946318426, lng: 121.33508397165093, title: 'Socorro', content: '<b style="color:black">Socorro Central Highland ARC<br>Socorro</b><br>Areas Covered:<br>Brgy. Mabuhay I<br>Brgy.Mabuhay II<br>Brgy.Happy Valley<br>Brgy.Subaan<br>Brgy.Sto Domingo<br>Brgy.Matungao'},
            {lat: 13.386303746064309, lng: 121.16340806433139, title: 'Department of Agrarian Reform (DAR) - Oriental Mindoro Provincial Office', content: '<b style="color:black">Department of Agrarian Reform (DAR) - Oriental Mindoro Provincial Office</b> <br>Sixteen Enterprise Building, Masipit, Calapan City, Oriental Mindoro, Calapan'},
            {lat: 13.414269724427067, lng: 121.01365204390436, title: 'Tacligan ARC', content: '<b style="color:black">Tacligan ARC<br>San Teodoro</b><br>Areas Covered:<br>Brgy.Tacligan, San Teodoro<br>Brgy.Calangatan, San Teodoro'},
            {lat: 13.301621324061662, lng: 121.21900659629495, title: 'Naujan East ARC', content: '<b style="color:black">Naujan East ARC<br>Naujan</b><br>Areas Covered:<br>Brgy.Sampaguita, Naujan<br>Brgy.Sta.Maria, Naujan<br>Brgy.Pinahan<br>Brgy.Barcenaga, Naujan<br>Brgy.Buhangin, Naujan<br>Brgy.Sto.Nino<br>Brgy.Tigkan<br>Brgy.Gen Esco<br>Brgy.Apitong<br>Brgy.Bagong Buhay<br>Brgy.Motoderazo<br>Brgy.San Carlos'},
            {lat: 13.1285399772527, lng: 121.20027392503039, title: 'Villanino ARC', content: '<b style="color:black">Villanino ARC<br>Victoria</b><br>Areas Covered:<br>Brgy.Villa Cerveza<br>Brgy.Antonino<br>Brgy. Alcate'},
            {lat: 13.175458102611334, lng: 121.42523900923291, title: 'Pola', content: '<b style="color:black">Tibayan ARC<br>Pola</b><br>Areas Covered:<br>Brgy.Tiguihan<br>Brgy.Batuhan<br>Brgy. Bayanan'},
            {lat: 13.132864124973636, lng: 121.39447791686257, title: 'Pola', content: '<b style="color:black">Matulatula ARC<br>Pola</b><br>Areas Covered:<br>Brgy.Matulatula<br>Brgy.Calubasanhon'},
            {lat: 13.116896823088688, lng: 121.51285758931662, title: 'Pola', content: '<b style="color:black">BICAMPU ARC<br>Pola</b><br>Areas Covered:<br>Brgy.Biga<br>Brgy.Calima<br>Brgy.Campamento<br>Brgy.Pula'},
            {lat: 13.03474302245065, lng: 121.48283363485872, title: 'Pinamalayan', content: '<b style="color:black">MAROPA ARC<br>Pinamalayan</b><br>Areas Covered:<br>Brgy.Mar Francisco<br>Brgy.Papandayan<br>Brgy.Rosario<br>Brgy.Malaya<br>Brgy.Del Razon<br>Brgy.Quinabigan'},
            {lat: 12.93377636405576, lng: 121.37960905348807, title: 'Gloria', content: '<b style="color:black">GLORIA ARC<br>Gloria</b><br>Areas Covered:<br>All Barangays'},
            {lat: 12.807636015378678, lng: 121.46299580443659, title: 'Bansud', content: '<b style="color:black">SALCEDO ARC<br>Bansud</b><br>Areas Covered:<br>Brgy.Salcedo<br>Brgy.Pag asa<br>Brgy.Villa Pag-asa<br>Brg.Proper Tiguisan<br>Brgy.Conrazon<br>Brgy.Rosacarra'},
            {lat: 12.681311814416846, lng: 121.50773274410912, title: 'Bongabong', content: '<b style="color:black">BONGABONG CENTRAL ARC<br>Bongabong</b><br>Areas Covered:<br>Brgy.Minda De Oro<br>Brgy.Sagana<br>Brgy.San Isidro<br>Brgy.Anilao<br>Brgy.Orconuma'},
            {lat: 12.636009911046846, lng: 121.43350348960068, title: 'Roxas', content: '<b style="color:black">ROXAS ARC<br>Roxas</b><br>Areas Covered:<br>Brgy.San Mariano<br>Brgy.San Aquilino<br>Brgy.San Vicente<br>Brgy.Happy Valley<br>Brgy.Little Tanauan<br>Brgy.Mabuhay<br>Brgy.Libtong<br>Brgy.Cantil<br>Brgy.Victoria'},
            {lat: 12.524814452405595, lng: 121.43550759074738, title: 'Mansalay', content: '<b style="color:black">MARBRIBA ARC<br>Mansalay</b><br>Areas Covered:<br>Brgy.Sta Maria<br>Brgy.Brigada<br>Brgy.Balugo'},
            {lat: 12.313115071840741, lng: 121.37117534376564, title: 'Bulalacao', content: '<b style="color:black">BULALACAO ARC<br>Bulalacao</b><br>Areas Covered:<br>Brgy.Balatasan<br>Brgy.San Juan<br>Brgy.Cambunang<br>Brgy.Nasukob<br><img src="img/bulalacao.jpg" alt="Description of the image" width="310" height="200">'}

          ];

          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 9,
            center: {lat: 13.386303746064309, lng: 121.16340806433139}
          });

          // Create an array to hold all the InfoWindows
          var infowindows = [];

          for (var i = 0; i < locations.length; i++) {
            var marker = new google.maps.Marker({
              position: locations[i],
              map: map,
              title: locations[i].title,
              icon: {
    url: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png' // or any other color
  }
            });

            var contentString = locations[i].content;

            // Create a new InfoWindow for each marker
            var infowindow = new google.maps.InfoWindow({
              content: contentString
            });

            // Add the InfoWindow to the array
            infowindows.push(infowindow);

            // Add click listener to marker
            marker.addListener('mouseover', function(idx) {
              return function() {
                // Close any previously opened InfoWindows
                for (var j = 0; j < infowindows.length; j++) {
                  infowindows[j].close();
                }

                infowindows[idx].setContent(locations[idx].content);
                infowindows[idx].open(map, this);
              }
            }(i));
          }
        }
      </script>


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
