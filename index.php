<!DOCTYPE html>
<html lang="en">
<style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
  <style>
  .slideshow-container {
    width: 100%;
    height: 500px; /* adjust to desired height */
    overflow: hidden;
  }

  .slide {
    width: 100%;
    height: 100%;
    display: none;
    position: relative;
  }

  .slide:first-child {
    display: block;
  }

  .slide iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .slideshow-controls {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
  }

  .prev-slide, .next-slide {
    background-color: #333;
    color: #fff;
    font-size: 20px;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
  }

  .prev-slide:hover, .next-slide:hover {
    background-color: #555;
  }

  .fade-in-out {
  opacity: 0; /* set the initial opacity to 0 */
  transition: opacity 1s ease-in-out; /* add a transition to the opacity property */
}

.fade-in-out.show {
  opacity: 1; /* set the opacity to 1 to show the element */
}



  </style>
<head>
    <meta charset="utf-8">
    <title>Home</title>
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
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<script>
var box = document.querySelector('.box');
box.classList.add('active');

const element = document.querySelector('.fade-in-out');
element.classList.add('show'); /* add the show class to the element to trigger the fade-in effect */



</script>

<body  onload="initMap()">



    <!-- Topbar Start -->
      <?php include 'header.html';

      require_once('visitor_counter.php');?>

    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include 'navigation.html'; ?>
    <!-- Navbar End -->


  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEOwa-yTQNajy47kZ9zYQHXuyileg3gQs&callback=initMap"></script>


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img  style="height:800px !important;"class="w-100 h-100" src="img/marcco.jpg" alt="Image">
  <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" >
                            <h3 class="text-white">Empowering farmers,</h3F>
                            <h1 class="display-1 text-white mb-md-4"> cultivating the future</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Explore</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                  <img style="height:800px !important;" class="w-100 h-100" src="img/machine1.jpg" alt="Image">
    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" >
                            <h3 class="text-white">Building stronger communities</h3>
                            <h1 class="display-1 text-white mb-md-4">through agriculture</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Explore</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                  <img style="height:800px !important; " class="w-100 h-100" src="img/machine12.jpg" alt="Image">
  <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" >
                            <h3 class="text-white">Transforming lives,</h3>
                            <h1 class="display-1 text-white mb-md-4">one farm at a time</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Explore</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact</a>
                        </div>
                    </div>
                </div>


            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->







    <!-- About Start -->
    <div class="container-fluid about pt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="d-flex h-100 border border-5 border-primary border-bottom-0 pt-4">
                        <img  style="height: 1000px !important;" class="img-fluid mt-auto mx-auto" src="img/testi.jpg">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <div class="mb-3 pb-2">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5">Mandate, Mission and Vision</h1>
                    </div>
                    <i class="fa fa-seedling display-1 text-secondary"></i>
                    <h4>Mandate and Functions</h4>

                    <p class="mb-4">To lead in the implementation of the Comprehensive Agrarian Reform Program (CARP) through Land Tenure Improvement (LTI), Agrarian Justice and Coordinated delivery of essential Support Services to client beneficiaries.</p>
                    <ul>
                    <li>To provide Land Tenure security to landless farmers through land acquisition and distribution; leasehold arrangements’ implementation and other LTI services;</li>
                    <li>To provide legal intervention to Agrarian Reform Beneficiaries (ARBS) through adjudication of agrarian cases and agrarian legal assistance;</li>
                    <li>To implement, facilitate and coordinate the delivery of support services to ARBs through Social Infrastructure and Local Capability Building (SILCAB); Sustainable Agribusiness and Rural Enterprise Development (SARED); and Access Facilitation and Enhancement Services (AFAES).</li>
                    </ul>
                    <div class="row gx-5 gy-4">


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


    <!-- Facts Start -->
    <div class="container-fluid bg-primary facts py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    
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

                          <?php
  $counter_file = "counter.txt";
  $counter = file_get_contents($counter_file);
  $today = date("Y-m-d"); // get current date in YYYY-MM-DD format

  $date_file = "date.txt";
  $last_date = file_get_contents($date_file);
  if ($today > $last_date) {
    // reset the counter if a new day has started
    $counter = 0;
    file_put_contents($counter_file, $counter);
    file_put_contents($date_file, $today);
  }

  $counter++;
  file_put_contents($counter_file, $counter);

?>

                            <h5 class="text-white">Daily Visitors</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up"><?php echo $counter; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
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
           zoom: 8.5,
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
    <div class="slideshow-container">
    <div class="slide">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/-oEr1T9lIA8?autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="slide">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/93mYZJ4taGs?autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="slide">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/dFInnb0ZgDQ" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  <div class="slideshow-controls">
    <button class="prev-slide" onclick="prevSlide()">&#10094;</button>
    <button class="next-slide" onclick="nextSlide()">&#10095;</button>
  </div>
<hr>
  <div class="mx-auto text-center mb-5" style="max-width: 500px;">

      <h1 class="display-5">ARC's in <br>Oriental Mindoro</h1>
  </div>
 <div id="map"></div>
    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                        <h6 class="text-primary text-uppercase">Services</h6>
                        <h1 class="display-5">DAR Services</h1>
                    </div>
                    <p class="mb-4">Provide support to farmers and rural communities, especially those who are historically marginalized or disadvantaged, to promote sustainable rural development and reduce poverty and inequality in the Philippines. The department provides various support services such as credit and financing, infrastructure development, capacity building, and market linkages to ARBs to help them develop their land, increase their agricultural productivity, and improve their livelihoods.</p>
                    <a href="contact.php" class="btn btn-primary py-md-3 px-md-5">Contact Us</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-carrot display-1 text-primary mb-3"></i>
                        <h4>Land Tenure Services</h4>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                           Learn More
                         </button>
                         <!-- The Modal -->
                         <div class="modal fade" id="myModal">
                           <div class="modal-dialog modal-xl">
                             <div class="modal-content">

                               <!-- Modal Header -->
                               <div class="modal-header">
                                 <h4 style="color:black;" class="modal-title">Land Tenure Services</h4>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                               </div>

                               <!-- Modal body -->
                               <div style="color:black;text-align:justify" class="modal-body">
                                 <img src="https://media.dar.gov.ph/source/2018/06/16/LTS_banner_final_5b24574e8f9c45_35679073.jpg" alt="your-image-description">
<br>
                                Land Tenure Services is operationalized either through land acquisition and distribution (LAD) or leasehold operations. LAD involves the redistribution of government and private agricultural lands to landless farmers and farm workers. It secures farmers' tenure, promotes social equity, and provides them with necessary productive resources needed to ensure their economic viability and productivity. Leasehold operations, on the other hand, is the alternative non-land transfer scheme. It covers all tenanted agricultural lands such those in the retained areas, not yet acquired for distribution under CARP, and those which may be validly covered under existing laws.
                               </div>
                              <iframe style="display: block; margin: 0 auto;" src="https://docs.google.com/presentation/d/1WFj8I7ZFXTI8dSSImos-5qXLWkRXxr3eqMe72z6CTn8/embed?start=false&amp;loop=false&amp;delayms=3000" width="960" height="569" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

                               <!-- Modal footer -->
                               <div class="modal-footer">
                                 <button style="background-color:#34AD54" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                               </div>

                             </div>
                           </div>
                         </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-apple-alt display-1 text-primary mb-3"></i>
                        <h4>Agrarian Legal Services</h4>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
                           Learn More
                         </button>

                         <div class="modal fade" id="myModal2">
                           <div class="modal-dialog modal-xl">
                             <div class="modal-content">

                               <!-- Modal Header -->
                               <div class="modal-header">
                                 <h4 style="color:black;" class="modal-title">Agrarian Legal Services</h4>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                               </div>

                               <!-- Modal body -->
                               <div style="color:black; text-align:justify" class="modal-body">
                                 <img src="https://media.dar.gov.ph/source/2018/06/16/ALS_5b2458b8206885_06676945.jpg" alt="your-image-description">
<br>
One of the Major Final Outputs of DAR is the Agrarian Legal Services (ALS).  This is complemented with two programs, namely: agrarian legal assistance (ALA) under the Bureau of Agrarian Legal Assistance (BALA) and adjudication of agrarian cases under the Department of Agrarian Reform Adjudication Board (DARAB).

Under RA 6657, DAR is vested with the primary jurisdiction to determine and adjudicate reform matters and to extend free legal assistance to farmer-beneficiaries affected by agrarian cases. The delivery of agrarian justice has two features: the Adjudication of Cases and Agrarian Legal Assistance.

Agrarian legal assistance is comprised of resolution of agrarian law implementation (ALI) cases, ARB representation before judicial and quasi-judicial bodies, and mediation and conciliation. On the other hand, Adjudication of Cases involves the resolution of cases by the DAR Adjudication Board (DARAB) and any of its salas.

There are three types of cases under this program namely: judicial or court cases, quasi-judicial, and cases related to agrarian law implementation (ALI). The first two types involve representation of farmers by DAR lawyers before the regular courts and DAR Adjudication Board, respectively. The third type involves the administrative rendering of decision on exemption, conversion and retention.

The DAR at present utilizes more aggressive alternative dispute resolution techniques in mediation to reduce conflicts maturing into court cases. The general objective is to persuade the contending parties to settle their disputes amicably or out of court before the DAR.

ALS is divided into two (2) components: Legal Advisory and Enforcement.

Legal Advisory involves legal services provided to agrarian reform beneficiaries (ARB) and landowner clients such as mediation and representation in judicial and quasi judicial courts. As per measurement for the agency’s final scorecards on this MFO, clients who rate the legal service as good or better and requests for legal services which are responded to within 15 days are included.

Enforcement, on the other hand, includes: agrarian cases acted upon for adjudication or resolution; and resolution of annual Agrarian Law Implementation (ALI) caseloads.  Adjudication within 3 months of agrarian related cases is assessed under this MFO.                               </div>

                               <!-- Modal footer -->
                               <div class="modal-footer">
                                 <button style="background-color:#34AD54" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                               </div>

                             </div>
                           </div>
                         </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-tractor display-1 text-primary mb-3"></i>
                        <h4>ARBDSP</h4>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal3">
                           Learn More
                         </button>
                         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal5">
                            EDES
                          </button>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal6">
                             VLFED
                           </button>
                           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal7">
                              BARC
                            </button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal8">
                               SIB
                             </button>

                             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal9">
                                AGROENTERPRISE
                              </button>



                         <div class="modal fade" id="myModal3">
                           <div class="modal-dialog modal-xl">
                             <div class="modal-content">

                               <!-- Modal Header -->
                               <div class="modal-header">
                                 <h4 style="color:black;" class="modal-title">ARBDSP</h4>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                               </div>
                               <iframe style="display: block; margin: 0 auto;" src="https://docs.google.com/presentation/d/1uXC0pojLDFEru9lVWnpoSXic4K4tI04F/embed?start=false&amp;loop=false&amp;delayms=3000" width="960" height="569" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

                               <!-- Modal body -->
                               <div style="color:black;text-align:justify" class="modal-body">

Technical Advisory Support Services (TASS) is an agrarian reform component that aims to capacitate Agrarian Reform Beneficiaries (ARBs)  and provide them access to neccessary support services to make their land productive.


This MFO on TASS constitutes development interventions from DAR and other government agencies through training programs and construction and rehabilitation of infrastructure facilities. Access of ARB households to basic social services is also included in this MFO to ensure holistic support for the beneficiaries.
<br>
<h3>Read More</h3>
<ul>
<a href="https://www.dar.gov.ph/services/technical-advisory-support/arc-development-strategy">The ARC Development Strategy</a>
<br>
<a href="https://www.dar.gov.ph/services/technical-advisory-support/arccess">Agrarian Reform Community Connectivity and Economic Support Services (ARCCESS)</a>
<br>


                               </div>

                               <!-- Modal footer -->
                               <div class="modal-footer">
                                 <button style="background-color:#34AD54" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                               </div>

                             </div>
                           </div>
                         </div>



                         <div class="modal fade" id="myModal5">
                           <div class="modal-dialog modal-xl">
                             <div class="modal-content">

                               <!-- Modal Header -->
                               <div class="modal-header">
                                 <h4 style="color:black;" class="modal-title">EDES</h4>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                               </div>
                               <iframe style="display: block; margin: 0 auto;" src="https://docs.google.com/presentation/d/1uXC0pojLDFEru9lVWnpoSXic4K4tI04F/embed?start=false&amp;loop=false&amp;delayms=3000#slide=id.p14" width="960" height="569" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

                               <!-- Modal body -->


                               <!-- Modal footer -->
                               <div class="modal-footer">
                                 <button style="background-color:#34AD54" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                               </div>

                             </div>
                           </div>
                         </div>
                         <div class="modal fade" id="myModal6">
                           <div class="modal-dialog modal-xl">
                             <div class="modal-content">

                               <!-- Modal Header -->
                               <div class="modal-header">
                                 <h4 style="color:black;" class="modal-title">VLFED</h4>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                               </div>
                               <iframe style="display: block; margin: 0 auto;" src="https://docs.google.com/presentation/d/1uXC0pojLDFEru9lVWnpoSXic4K4tI04F/embed?start=false&amp;loop=false&amp;delayms=3000#slide=id.p35" width="960" height="569" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

                               <!-- Modal body -->


                               <!-- Modal footer -->
                               <div class="modal-footer">
                                 <button style="background-color:#34AD54" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                               </div>

                             </div>
                           </div>
                         </div>
                         <div class="modal fade" id="myModal7">
                           <div class="modal-dialog modal-xl">
                             <div class="modal-content">

                               <!-- Modal Header -->
                               <div class="modal-header">
                                 <h4 style="color:black;" class="modal-title">BARC</h4>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                               </div>
                               <iframe style="display: block; margin: 0 auto;" src="https://docs.google.com/presentation/d/1uXC0pojLDFEru9lVWnpoSXic4K4tI04F/embed?start=false&amp;loop=false&amp;delayms=3000#slide=id.p10" width="960" height="569" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

                               <!-- Modal body -->


                               <!-- Modal footer -->
                               <div class="modal-footer">
                                 <button style="background-color:#34AD54" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                               </div>

                             </div>
                           </div>
                         </div>
                         <div class="modal fade" id="myModal8">
                           <div class="modal-dialog modal-xl">
                             <div class="modal-content">

                               <!-- Modal Header -->
                               <div class="modal-header">
                                 <h4 style="color:black;" class="modal-title">SIB</h4>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                               </div>
                               <iframe style="display: block; margin: 0 auto;" src="https://docs.google.com/presentation/d/1uXC0pojLDFEru9lVWnpoSXic4K4tI04F/embed?start=false&amp;loop=false&amp;delayms=3000#slide=id.p5" width="960" height="569" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

                               <!-- Modal body -->


                               <!-- Modal footer -->
                               <div class="modal-footer">
                                 <button style="background-color:#34AD54" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                               </div>

                             </div>
                           </div>
                         </div>
                         <div class="modal fade" id="myModal9">
                           <div class="modal-dialog modal-xl">
                             <div class="modal-content">

                               <!-- Modal Header -->
                               <div class="modal-header">
                                 <h4 style="color:black;" class="modal-title">AGROENTERPRISE</h4>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                               </div>
                               <iframe style="display: block; margin: 0 auto;" src="https://docs.google.com/presentation/d/1uXC0pojLDFEru9lVWnpoSXic4K4tI04F/embed?start=false&amp;loop=false&amp;delayms=3000#slide=id.p16" width="960" height="569" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

                               <!-- Modal body -->


                               <!-- Modal footer -->
                               <div class="modal-footer">
                                 <button style="background-color:#34AD54" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                               </div>

                             </div>
                           </div>
                         </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-seedling display-1 text-primary mb-3"></i>
                        <h4>Agrarian Policy Advisory Services</h4>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal4">
                           Learn More
                         </button>
                         <div class="modal fade" id="myModal4">
                           <div class="modal-dialog modal-xl">
                             <div class="modal-content">

                               <!-- Modal Header -->
                               <div class="modal-header">
                                 <h4 style="color:black;" class="modal-title">Agrarian Policy Advisory Services</h4>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                               </div>

                               <!-- Modal body -->
                               <div style="color:black;text-align:justify" class="modal-body">
                                 <img src="https://media.dar.gov.ph/source/2018/06/16/APAS_5b245f99dc9e57_40698601.jpg" alt="your-image-description">
<br>
This MFO on Agrarian Policy Advisory Services (APAS) covers policy advisory formulation, updating and dissemination. For FY 2015, the Department of Agrarian Reform has signed and issued 5 Administrative Orders and 1 Memorandum Circular.


                               </div>

                               <!-- Modal footer -->
                               <div class="modal-footer">
                                 <button style="background-color:#34AD54" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                               </div>

                             </div>
                           </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-primary feature py-5 pb-lg-0 my-5">
        <div class="container py-5 pb-lg-0">
            <div class="mx-auto text-center mb-3 pb-2" style="max-width: 500px;">
                <h6 class="text-uppercase text-secondary">Features</h6>
                <h1 class="display-5 text-white">Why Choose Us!!!</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-seedling fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">100% Organic</h4>

                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">Award Winning</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="text-align: center;" class="d-block bg-white h-100 text p-5 pb-lg-0">
Agriventures is a technology platform that provides innovative solutions to farmers, agricultural businesses, and stakeholders in the agribusiness sector. The platform leverages technology to improve agricultural productivity, sustainability, and profitability, and it is well-suited for smallholder farmers, large-scale commercial farmers, and all those who are interested in modernizing their agricultural practices.<img class="img-fluid" src="img/feature.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-tractor fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">Modern Farming</h4>

                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">24/7 Support</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Buy and Sell Products with</h6>


                <h1 class="display-5"><a href="https://agriventures.tech/">AGRIVENTURES.TECH</a></h1>
            </div>
            <div class="owl-carousel product-carousel px-5">
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/tamaraw.jpg" alt="Tamaraw Rice">
                        <h6 class="mb-3">Tamaraw Mindoro Rice</h6>
                        <h5 class="text-primary mb-0">₱ 85.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href="https://agriventures.tech/front/product/NDRDaHIweCF6SHVpRDMx"><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href="https://agriventures.tech/front/product/NDRDaHIweCF6SHVpRDMx"><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/dinorado.jpg"  alt="">
                        <h6 class="mb-3">Dinorado Rice</h6>
                        <h5 class="text-primary mb-0">₱ 44.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/turmeric.jpg" alt="">
                        <h6 class="mb-3">Turmeric Ginger Instant Salabat</h6>
                        <h5 class="text-primary mb-0">₱ 110.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/romaqueen.jpg" alt="">
                        <h6 class="mb-3">Roma Queen Chilli Garlic in Oil</h6>
                        <h5 class="text-primary mb-0">₱ 85.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/barco.png" alt="">
                        <h6 class="mb-3">BARCO Virgin Coconut Oil</h6>
                        <h5 class="text-primary mb-0">₱ 175.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5" style="margin: 90px 0 135px 0;">
      <div class="container py-5">
          <div class="row justify-content-center">
              <div class="col-lg-7">
                  <div class="owl-carousel testimonial-carousel">
                      <div class="testimonial-item">
                          <img class="mx-auto p-2 border border-5 border-secondary  mb-4" src="img/testi2" alt="" style="width: 700px !important;height: 700px !important;">
                      </div>
                      <div class="testimonial-item">
                          <img class="mx-auto p-2 border border-5 border-secondary  mb-4" src="img/testi3" alt="" style="width: 700px !important;height: 700px !important;">
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
    <!-- Testimonial End -->


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


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Our Projects</h6>
                <h1 class="display-5">Recent Activities</h1>
            </div>
            <div class="row g-5">
    <?php include "config.php" ?>

    <?php
    // Retrieve up to 3 most recent posts from the database
    $query = "SELECT * FROM posts ORDER BY timestamp DESC LIMIT 3";
    $result = mysqli_query($conn, $query);

    // Loop through each post and display it
    $count = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $post_id = $row['id'];
        $title = $row['title'];
        $content = $row['content'];
        $image_path ='http://localhost/DAR/admin/uploads/' . $row['image'];

        $timestamp = $row['timestamp'];
        $formatted_date = date('M d, Y', strtotime($timestamp));

        // Display the post only if we haven't already displayed 3 posts
        if ($count < 3) {
            ?>
            <div class="col-lg-4">
                <div class="blog-item position-relative overflow-hidden">
                    <img class="img-fluid" src="<?php echo $image_path; ?>" alt="">
                    <a class="blog-overlay" href="view_post.php?id=<?php echo $post_id; ?>">
                        <h4 class="text-white"><?php echo $title; ?></h4>
                        <span class="text-white fw-bold">Uploaded on <?php echo $formatted_date; ?></span>
                    </a>
                </div>
            </div>
            <?php
            $count++;
        }
    }
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
