<!DOCTYPE html>
<html lang="sk">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    

    <title>Aplikačná vrstva</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    
<!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->
                  <a href="index.html" class="logo">
                      <img src="assets/images/templatemo-eduwell.png" alt="EduWell Template">
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->
                  <ul class="nav">
                  <li class="scroll-to-section"><a href="#top" class="active">Úvod</a></li>
                          <li class="scroll-to-section"><a href="#simple-cta">Kto sme</a></li>
                          <li class="scroll-to-section"><a href="#services">Produkty</a></li>
                          <li class="scroll-to-section"><a href="#testimonials">Recenzie</a></li> 
                          <li class="scroll-to-section"><a href="#courses">Zadania</a></li>
                          <li class="scroll-to-section"><a href="#contact-section">Kontakt</a></li> 
                          <li class="has-sub">
                              <a href="javascript:void(0)">Tabuľky</a>
                              <ul class="sub-menu">
                                  <li><a href="tabulka_vyrobky.php">výrobkov</a></li>
                                  <li><a href="tabulka_objednavky.php">objednávok</a></li>
                                  <li><a href="tabulka_dodacie_listy.php">dodacích listov</a></li>
                                  <li><a href="tabulka_prijmov.php">príjmov</a></li>
                                  <li><a href="tabulka_nakladov.php">nákladov</a></li>
                                  <li><a href="tabulka_zisku.php">ziskov</a></li>
                        </ul>
                    </li>
                    
                </ul>       
                  <a class='menu-trigger'>
                      <span>Menu</span>
                  </a>
                  <!-- ***** Menu End ***** -->
                </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">

          <table class="table table-bordered" style="background-color: white;" style="text-align: center;">
        <thead class="table-danger" style="text-align: center;">
            <tr>
                <th>ID dodacieho listu</th>
                <th>ID partnera</th>
                <th>Dátum objednávky</th>
                <th>Dátum dodania</th>
                <th>Cena</th>
            </tr>
        </thead>
        <h2 style="text-align: center;">Tabuľka dodacích listov</h2>
        <tbody style="text-align: center;">


        
        
        <?php
         include 'config.php';
         $con = mysqli_connect("$localhost","$user","$password","$db");

         $query = "Select * FROM kapko_dodaci_list as t GROUP BY id_dod ORDER BY id_dod";

         $query_run = mysqli_query($con, $query);

         if (mysqli_num_rows($query_run) > 0)
         {
             foreach($query_run as $row)
             {
             ?>

             <tr>
                 <td><?= $row['id_dod']; ?></td>
                 <td><?= $row['id_part']; ?></td>
                 <td><?= $row['datum_obj']; ?></td>
                 <td><?= $row['datum_dod']; ?></td>
                 <td><?= $row['cena_dl']; ?></td>
             </tr>
             <?php
             }
         }
         else
         {
             echo "nie je tu ziadna tabulka";
         }
         
        ?>
        </tbody>
        </table>
<?php
?>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="contact-us our-office">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-info">
            <div class="section-heading">
              <h6>Our Office</h6>
              <h4>Get closer to <em>EduWell</em></h4>
            </div>
            <p>Trust fund nocore broklyn humblebrag mustache
              pork kitsch, bicycle rights hexagon schlitz keytar palo is
              santo drinking vinegar fam ramps. <br><br>Four dollar toast and
              edison bulb vinyl, listicle hashtag pug scenester typewrit
              er yuccie street artboard or whatever to fill place.</p>
            <ul>
              <li>- Selfies you probably haven't heard of them.</li>
              <li>- Tousled cold-pressed chicharrones yuccie.</li>
              <li>- Pabst iPhone chartreuse shabby chic tumeric.</li>
              <li>- Scenester normcore mumblecore snackwave.</li>
            </ul>
            <div class="main-button-gradient">
              <a href="our-services.html">Our Services</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div id="video">
            <div class="thumb">
              <img src="assets/images/video-thumb.jpg" alt="">
              <div class="play-button">
                <a rel="nofollow" href="https://www.youtube.com/templatemo" target="_blank"><i class="fa fa-play"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <p class="copyright">Copyright © 2022 EduWell Co., Ltd. All Rights Reserved. 
          
          <br>Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>

</body>
</html>