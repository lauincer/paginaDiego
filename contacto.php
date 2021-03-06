<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PROSOLAR COSTA RICA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/min/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/google-map-init.js"></script>


    <script src="js/main.js"></script>


  </head>
  <body>
    <!-- Header Start -->
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- header Nav Start -->
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="Logo">
                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
                    <li><a href="ventajas.html">Ventajas</a></li>
                    <li><a href="servicios.html">Servicios</a></li>
                    <li><a href="cotizar.html">Cotizar</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                  </li>
                </ul>
                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
            </div>
          </div>
        </div>
        </header><!-- header close -->


        <!-- Slider Start -->
        <section id="global-header">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">

                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- contact form start -->
        <section id="contact-form">
          <div class="container">
            <h3>Comuníquese con nosotros a través de los siguientes medios, estamos para servirle</h3>
           <!-- <h1>Comuníquese con nosotros a través de los siguientes medios, estamos para servirle</h1> -->
            <div id="contact-box" class="row">

              <div class="col-md-6 col-sm-12">
                <div class="block">
                <!-- <h2>Comuníquese con nosotros a través de los siguientes medios, estamos para servirle</h2> -->
                  <ul class="address-block">
                    <li>
                      <i class="fa fa-envelope-o"></i>info@prosolarcr.com
                    </li>
                    <li>
                      <i class="fa fa-phone"></i> (506) 8836-7511
                    </li>
                    <li>
                      <i class="fa fa-facebook"></i>ProsolarCR
                    </li>
                    <li>
                      <i class="fa fa-map-marker"></i>Ulloa, Heredia, Costa Rica
                    </li>
                  </ul>

                  <!--
                  <ul class="social-icons">
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                  </ul>
                  -->
                </div>
              </div>
              <!--
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <h2>We Also Count In Google Map</h2>
                    <div class="google-map">
                      <div id="map"></div>
                    </div>
                </div>
              </div>
              -->
           <!-- </div> <!-- row

           <div class="row"> -->

              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <?php
                    $errorMessage = '';

                    if ((isset($_POST['email']) && strlen($_POST['email']) == 0) ||
                        (isset($_POST['name']) && strlen($_POST['name']) == 0) ||
                        (isset($_POST['comment']) && strlen($_POST['comment']) == 0))  {
                        $errorMessage = 'Por favor ingrese toda la información solicitada.';
                    }

                  //if variables are filled out, send email
                    if (isset($_POST['email']) && strlen($_POST['email']) > 0 &&
                        isset($_POST['name']) && strlen($_POST['name']) > 0 &&
                        isset($_POST['comment']) && strlen($_POST['comment']) > 0)  {

                      //Email information
                      $admin_email = "lauincer@gmail.com";
                      $email = $_REQUEST['email'];
                      $name = $_REQUEST['name'];
                      $phone = $_REQUEST['phone'];
                      $comment = $_REQUEST['comment'];
                      $subject = 'Mensaje de ' . $name . ' - PROSolar Contacto';
                      $body = '
                      <html>
                        <head>
                          <title>Mensaje de ' . $name . ' - PROSolar Contacto</title>
                        </head>
                        <body>
                          <p>Nombre: ' . $name . '</p>
                          <p>Correo electrónico: ' . $email . '</p>
                          <p>Número de teléfono: ' . $phone . '</p>
                          <p>Comentario: ' . $comment . '</p>
                        </body>
                      </html>
                      ';

                      $headers[] = 'MIME-Version: 1.0';
                      $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                      $headers[] = 'To: ' . $admin_email;
                      $headers[] = 'From: ' . $email;

                      //send email
                      mail($admin_email, $subject, $body, implode("\r\n", $headers));

                      //Email response
                      echo "Gracias por contactarnos. Nos pondremos en contacto con usted.";
                    }
                    //if "email" variable is not filled out, display the form
                    else  {
                  ?>
                  <form name="contactform" method="post" action="">
                    <div class="form-group">
                      <input name="name" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <input name="email" type="text" class="form-control" placeholder="Correo Electrónico">
                    </div>
                    <div class="form-group">
                      <input name="phone" type="text" class="form-control" placeholder="Número telefónico">
                    </div>
                    <div class="form-group-2">
                      <textarea name="comment" class="form-control" rows="3" placeholder="Su mensaje"></textarea>
                    </div>
                    <button class="btn btn-default" type="submit">Enviar mensaje</button>
                  </form>
                  <br/>
                  <?php
                      echo $errorMessage;
                    }
                  ?>
                </div>
              <!-- </div> -->

            </div> <!-- row -->


          </div> <!-- container -->

        </section>

        <!-- Call to action Start -->
        <section id="call-to-action">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h2>Cotice su sistema</h2>
                  <p>Conozca cuánto puede empezar a ahorrar con PROSOLAR</p>
                  <a class="btn btn-default btn-call-to-action" href="#" >Cotizar</a>
                </div>
              </div>
            </div>
          </div>
        </section>

    <!-- footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-manu">
              <ul>
                <li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
                <li><a href="FAQ.html">Preguntas Frecuentes</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
              </ul>
            </div>
            <p>©2017 <strong> PROSOLAR </strong> Energías Renovables</p>
          </div>
        </div>
      </div>
    </footer>



      </body>
    </html>
