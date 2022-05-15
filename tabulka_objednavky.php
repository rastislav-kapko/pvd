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

  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">



          <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Filtrovanie objednávok</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Dátum objednávky od</label>
                                    <input type="date" name="start_price" value="<?php if(isset($_GET['start_price'])){echo $_GET['start_price']; }else{echo "0";} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Dátum objednávky do</label>
                                    <input type="date" name="end_price" value="<?php if(isset($_GET['end_price'])){echo $_GET['end_price']; }else{echo "10";} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Klikni na tlačidlo</label> <br/>
                                    <button type="submit" class="btn btn-primary px-4">Filtrovať</button>
                                </div>
                            </div>
                            
                        </form>

                    </div>
                </div>
            </div>

<section><br></section>

<table class="table table-bordered" style="background-color: white;" style="text-align: center;">
        <thead class="table-secondary" style="text-align: center;">
            <tr>
                <th>ID Objednávky</th>
                <th>ID Partnera</th>
                <th>Dátum objednávky</th>
                <th>Dátum dodania</th>
                <th>Cena objednávky</th>
            </tr>
        </thead>
        <h2 style="text-align: center;">Tabuľka výrobkov</h2>
        <tbody style="text-align: center;">




            
                        <?php  
                        include 'config.php';
                        $con = mysqli_connect("$localhost","$user","$password","$db");

                        if(isset($_GET['start_price']) && isset($_GET['end_price']))
                        {
                            $startprice = $_GET['start_price'];
                            $endprice = $_GET['end_price'];

                            $query = "SELECT * FROM kapko_objednavka WHERE datum_obj BETWEEN '$startprice' AND '$endprice' ";
                        }
                        else
                        {
                            $query = "SELECT * FROM kapko_objednavka";
                        }
                        
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $items)
                            {
                                // 

                                ?>

                                <tr>
                                    <td><?= $items['id_objednavky']; ?></td>
                                    <td><?= $items['id_partnera']; ?></td>
                                    <td><?= $items['datum_obj']; ?></td>
                                    <td><?= $items['datum_dod']; ?></td>
                                    <td><?= $items['cena_obj']; ?></td>
                                </tr>
                                <?php




                               
                            }
                        }
                        else
                        {
                            echo "Nenájdený záznam";
                        }
                        ?>
                        
                   
          </tbody>
       
</table>




          </div>
        </div>
      </div>
    </div>
  </section>




  

  






    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>









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