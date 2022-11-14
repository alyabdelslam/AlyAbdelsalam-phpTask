<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<!-- 
THEME: Constra - Construction Html5 Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/constra-construction-template/
DEMO: https://demo.themefisher.com/constra/
GITHUB: https://github.com/themefisher/Constra-Bootstrap-Construction-Template

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Constra - Construction Html5 Template</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Themefisher">
  <meta name=generator content="Themefisher Constra HTML Template v1.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">9051 Constra Incorporate, USA</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebbok.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="https://github.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-github"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
@include('header')
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Project</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                      <li class="breadcrumb-item"><a href="{{route('projects')}}">Projects</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Projects Single</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">

    <div class="row">
      <div class="col-lg-8">
        <div id="page-slider" class="page-slider small-bg">
          <div class="item">
            <img loading="lazy" class="img-fluid" src="images/projects/project5.jpg" alt="project-image" />
          </div>

          <div class="item">
            <img loading="lazy" class="img-fluid" src="images/projects/project4.jpg" alt="project-image" />
          </div>
        </div><!-- Page slider end -->
      </div><!-- Slider col end -->

      <div class="col-lg-4 mt-5 mt-lg-0">

        <h3 class="column-title mrt-0">Capital Teltway Building</h3>
        <p>Morbi turpis nisl, auctor ut nisl vel, pellentesque euismod nunc nunc accumsan imperdiet.</p>

        <ul class="project-info list-unstyled">
          <li>
            <p class="project-info-label">Client</p>
            <p class="project-info-content">Pransbay Powers Authority</p>
          </li>
          <li>
            <p class="project-info-label">Architect</p>
            <p class="project-info-content">Dlarke Pelli Incorp</p>
          </li>
          <li>
            <p class="project-info-label">Location</p>
            <p class="project-info-content">McLean, VA</p>
          </li>
          <li>
            <p class="project-info-label">Size</p>
            <p class="project-info-content">65,000 SF</p>
          </li>
          <li>
            <p class="project-info-label">Year Completed</p>
            <p class="project-info-content">2015</p>
          </li>
          <li>
            <p class="project-info-label">Categories</p>
            <p class="project-info-content">Commercial, Interiors</p>
          </li>
          <li>
            <p class="project-link">
              <a class="btn btn-primary" target="_blank" href="{{route('project')}}">View Project</a>
            </p>
          </li>
        </ul>

      </div><!-- Content col end -->

    </div><!-- Row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->

@include('footer')

  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>