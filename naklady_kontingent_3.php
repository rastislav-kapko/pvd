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
                  <a href="index.php" class="logo">
                      <img src="assets/images/templatemo-eduwell.png" alt="EduWell Template">
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->
                  <ul class="nav">
                  <li><a href="index.php">Úvod</a></li>
                          <li><a href="index.php">Kto sme</a></li>
                          <li><a href="index.php">Produkty</a></li>
                          <li><a href="index.php">Recenzie</a></li> 
                          <li><a href="index.php">Zadania</a></li>
                          <li><a href="index.php">Kontakt</a></li> 
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

<section>
<img src="" alt="Tu bude obrazok grafu rok">
</section>




  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">

          <table class="table table-bordered" style="background-color: white;" style="text-align: center;">
        <thead class="table-danger" style="text-align: center;">
            <tr>
                <th>Rok</th>
                <th>BA</th>
                <th>TT</th>
                <th>TN</th>
                <th>NR</th>
            </tr>
        </thead>
        <h2 style="text-align: center;">Vrchná strana kocky</h2>
        <tbody style="text-align: center;">


        
        
        <?php
         include 'config.php';
         $con = mysqli_connect("$localhost","$user","$password","$db");

         $query = "SELECT ifnull(t.rok,'spolu')Rok , sum(IF(t.id_vuc='BA',t.polozka,0)) as 'BA' , sum(IF(t.id_vuc='TT',t.polozka,0)) as 'TT' , sum(IF(t.id_vuc='TN',t.polozka,0)) as 'TN' , sum(IF(t.id_vuc='NR',t.polozka,0)) as 'NR' ,sum(t.polozka) as 'spolu' FROM kapko_tf2 t group by t.rok";

         $query_run = mysqli_query($con, $query);

         if (mysqli_num_rows($query_run) > 0)
         {
             foreach($query_run as $row)
             {
             ?>

             <tr>
                 <td><?= $row['Rok']; ?></td>
                 <td><?= $row['BA']; ?>€</td>
                 <td><?= $row['TT']; ?>€</td>
                 <td><?= $row['TN']; ?>€</td>
                 <td><?= $row['NR']; ?>€</td>
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










  <section>
<img src="" alt="Tu bude obrazok grafu mesiac">
</section>




  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">

          <table class="table table-bordered" style="background-color: white;" style="text-align: center;">
        <thead class="table-danger" style="text-align: center;">
            <tr>
                <th>ID Skupiny</th>
                <th>2016</th>
                <th>2017</th>
                <th>2018</th>
                <th>2019</th>
                <th>2020</th>
                <th>2021</th>
                <th>2022</th>
            </tr>
        </thead>
        <h2 style="text-align: center;">Bočná strana kocky</h2>
        <tbody style="text-align: center;">


        
        
        <?php
         include 'config.php';
         $con = mysqli_connect("$localhost","$user","$password","$db");

         $query = "SELECT ifnull(t.skupina_vstupu,'spolu')id_skupiny ,
         sum(IF(t.rok=2016,t.polozka,0)) as '2016', 
         sum(IF(t.rok=2017,t.polozka,0)) as '2017' , 
         sum(IF(t.rok=2018,t.polozka,0)) as '2018' , 
         sum(IF(t.rok=2019,t.polozka,0)) as '2019' , 
         sum(IF(t.rok=2020,t.polozka,0)) as '2020' , 
         sum(IF(t.rok=2021,t.polozka,0)) as '2021',
         sum(IF(t.rok=2022,t.polozka,0)) as '2022',
         sum(t.polozka) as 'spolu' FROM kapko_tf2 t group by t.skupina_vstupu WITH ROLLUP";

         $query_run = mysqli_query($con, $query);

         if (mysqli_num_rows($query_run) > 0)
         {
             foreach($query_run as $row)
             {
             ?>

             <tr>
                 <td><?= $row['id_skupiny']; ?></td>
                 <td><?= $row['2016']; ?>€</td>
                 <td><?= $row['2017']; ?>€</td>
                 <td><?= $row['2018']; ?>€</td>
                 <td><?= $row['2019']; ?>€</td>
                 <td><?= $row['2020']; ?>€</td>
                 <td><?= $row['2021']; ?>€</td>
                 <td><?= $row['2022']; ?>€</td>
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







  <section>
<img src="" alt="Tu bude obrazok grafu den">
</section>




  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">

          <table class="table table-bordered" style="background-color: white;" style="text-align: center;">
        <thead class="table-danger" style="text-align: center;">
            <tr>
                <th>ID Skupiny</th>
                <th>BA</th>
                <th>TT</th>
                <th>TN</th>
                <th>NR</th>
            </tr>
        </thead>
        <h2 style="text-align: center;">Predná strana kocky</h2>
        <tbody style="text-align: center;">


        
        
        <?php
         include 'config.php';
         $con = mysqli_connect("$localhost","$user","$password","$db");

         $query = "SELECT ifnull(t.skupina_vstupu,'spolu')id_skupiny , 
         sum(IF(t.id_vuc='BA',t.polozka,0)) as 'BA' ,
         sum(IF(t.id_vuc='TT',t.polozka,0)) as 'TT' ,
         sum(IF(t.id_vuc='TN',t.polozka,0)) as 'TN' ,
         sum(IF(t.id_vuc='NR',t.polozka,0)) as 'NR' ,
         sum(t.polozka) as 'spolu' FROM kapko_tf2 t group by t.skupina_vstupu WITH ROLLUP";

         $query_run = mysqli_query($con, $query);

         if (mysqli_num_rows($query_run) > 0)
         {
             foreach($query_run as $row)
             {
             ?>

             <tr>
                 <td><?= $row['id_skupiny']; ?></td>
                 <td><?= $row['BA']; ?>€</td>
                 <td><?= $row['TT']; ?>€</td>
                 <td><?= $row['TN']; ?>€</td>
                 <td><?= $row['NR']; ?>€</td>
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