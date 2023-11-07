<?php

   require 'config/databaseServices.php';
   $db = new Database();
   $con = $db->conectar();

   $sql = $con->prepare("SELECT idServices, Serv_name, Serv_description, Serv_price, Serv_img FROM services WHERE Serv_activo=1");
   $sql->execute();
   $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
      <html lang="en">
         <head>
            <!-- basic -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- mobile metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="initial-scale=1, maximum-scale=1">
            <!-- site metas -->
            <title>Lizbeth Hair Salon</title>
            <meta name="keywords" content="">
            <meta name="description" content="">
            <meta name="author" content="">
            <!-- bootstrap css -->
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <!-- style css -->
            <link rel="stylesheet" href="css/style.css">
            <!-- Responsive-->
            <link rel="stylesheet" href="css/responsive.css">
            <!-- fevicon -->
            <link rel="icon" href="images/fevicon.jpg" type="image/jpg" />

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


            <!-- Scrollbar Custom CSS -->
            <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
            <!-- Tweaks for older IEs-->
            <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
         </head>
         <!-- body -->
         <body class="main-layout">
            <!-- loader  -->
            <div class="loader_bg">
               <div class="loader"><img src="images/loading.gif" alt="#"/></div>
            </div>
            <!-- end loader -->
            <!-- header -->
            <header>
               <div class="header">
               <div class="logo">
                  <a href="index.html"> <img src="images/logo.png" alt=""> </a>
               </div>
               <nav class="navbar">
                  <div id="close-navbar" class="fas fa-times"></div>
                  <a href="index.php">Inicio</a>
                  <a href="about.php">Nosotros</a>
                  <a href="we-do.php">Servicios</a>
                  <a href="contact.php">Contacto</a>
                  <a href="register.php">Regístrate</a>
                  <a href="signin.php">Iniciar sesión</a>
               </nav>
            
               <div id="menu-btn" class="fas fa-bars"></div>
               </div>
               <section class="Shome" id="Shome">
                  <div class="Scontent">
                     <h3>Servicios</h3>
                  </div>
               </section>
            </header>
            <!-- end header -->

            <!-- Start Menu -->
            <div class="menu-box">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading-title text-center">
                           <h2>Nuestros servicios</h2>
                           <p>Lizbeth Hair Salon te ofrece los siguiente servicios </p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="special-menu text-center">
                           <div class="button-group filter-button-group">
                              <button class="active" data-filter="*">Todas</button>
                              <button data-filter=".piel">Piel</button>
                              <button data-filter=".manos">Manos</button>
                              <button data-filter=".cabello">Cabello</button>
                              <button data-filter=".cuerpo">Cuerpo</button>

                           </div>
                        </div>
                     </div>
                  </div>
                  <?php foreach($resultado as $row) { ?>
                  <div class="row special-list">
                     <div class="col-lg-4 col-md-6 special-grid drinks">
                        <div class="gallery-single fix">
                        <?php
                           $id = $row['idServices'];
                           $imagen = "images/Servicios/" . $id . "/principal.jpg";

                           if(!file_exists($imagen)){
                              $imagen = "images/no-photo.png";
                           }
                           ?>
                           <img src="<?php echo $imagen; ?>" class="img-fluid" alt="Image">
                           <div class="why-text">
                              <h4><?php echo $row['Serv_name'] ?></h4>
                              <p><?php echo $row['Serv_description'] ?></p>
                              <h5><?php echo $row['Serv_price'] ?></h5>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-lg-4 col-md-6 special-grid drinks">
                        <div class="gallery-single fix">
                           <img src="images/img-02.jpg" class="img-fluid" alt="Image">
                           <div class="why-text">
                              <h4>Special Drinks 2</h4>
                              <p>Sed id magna vitae eros sagittis euismod.</p>
                              <h5> $9.79</h5>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-lg-4 col-md-6 special-grid drinks">
                        <div class="gallery-single fix">
                           <img src="images/img-03.jpg" class="img-fluid" alt="Image">
                           <div class="why-text">
                              <h4>Special Drinks 3</h4>
                              <p>Sed id magna vitae eros sagittis euismod.</p>
                              <h5> $10.79</h5>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-lg-4 col-md-6 special-grid lunch">
                        <div class="gallery-single fix">
                           <img src="images/img-04.jpg" class="img-fluid" alt="Image">
                           <div class="why-text">
                              <h4>Special Lunch 1</h4>
                              <p>Sed id magna vitae eros sagittis euismod.</p>
                              <h5> $15.79</h5>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-lg-4 col-md-6 special-grid lunch">
                        <div class="gallery-single fix">
                           <img src="images/img-05.jpg" class="img-fluid" alt="Image">
                           <div class="why-text">
                              <h4>Special Lunch 2</h4>
                              <p>Sed id magna vitae eros sagittis euismod.</p>
                              <h5> $18.79</h5>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-lg-4 col-md-6 special-grid lunch">
                        <div class="gallery-single fix">
                           <img src="images/img-06.jpg" class="img-fluid" alt="Image">
                           <div class="why-text">
                              <h4>Special Lunch 3</h4>
                              <p>Sed id magna vitae eros sagittis euismod.</p>
                              <h5> $20.79</h5>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-lg-4 col-md-6 special-grid dinner">
                        <div class="gallery-single fix">
                           <img src="images/img-07.jpg" class="img-fluid" alt="Image">
                           <div class="why-text">
                              <h4>Special Dinner 1</h4>
                              <p>Sed id magna vitae eros sagittis euismod.</p>
                              <h5> $25.79</h5>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-lg-4 col-md-6 special-grid dinner">
                        <div class="gallery-single fix">
                           <img src="images/img-08.jpg" class="img-fluid" alt="Image">
                           <div class="why-text">
                              <h4>Special Dinner 2</h4>
                              <p>Sed id magna vitae eros sagittis euismod.</p>
                              <h5> $22.79</h5>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-lg-4 col-md-6 special-grid dinner">
                        <div class="gallery-single fix">
                           <img src="images/img-09.jpg" class="img-fluid" alt="Image">
                           <div class="why-text">
                              <h4>Special Dinner 3</h4>
                              <p>Sed id magna vitae eros sagittis euismod.</p>
                              <h5> $24.79</h5>
                           </div>
                        </div>
                     </div>
                     
                  </div>
                  <?php } ?>
               </div>
            </div>
           <!--end what we do-->  


            <!--  footer -->
            <section class="footer">

               <div class="box-container">
            
                  <div class="box">
                     <h3> Síguenos </h3>
                     <p>Ve las últimas novedades para la belleza en nuestras redes sociales</p>
                     <div class="share">
                        <a href="https://www.facebook.com/LizbethBeautySALON?mibextid=LQQJ4d" target="_blank"" class="fab fa-facebook-f"></a>
                        <a href="https://wa.me/5218995493458" target="_blank" class="fab fa-whatsapp"></a>
                     </div>
                  </div>
            
                  <div class="box">
                     <h3>Agenda tu cita</h3>
                     <p>+52 1 899 549 3458 </p>
                     <a href="#" class="link">lizbeth.hair@gmail.com</a>
                  </div>
            
                  <div class="box">
                     <h3>Ubicación</h3>
                     <p>Calle Culiacán #440 Col. Rodríguez<br>
                     Reynosa, Tamaulipas <br>
                     México
                     </p>
                  </div>

                  <div class="box">
                     <h3>Horarios</h3>
                     <p>Lunes-Sábado: <br> 
                        10:00 PM - 7:00 PM <br>
                        Domingo: <br>
                        Previa cita
                     </p>
                  </div>
            
               </div>
            
               <div class="credit"> &copy 2023 <span>Lizbeth Hair Salon</span> | Todos los derechos reservados. </div>
            
            </section>
            <!-- end footer -->
            <!-- Javascript files-->
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/jquery-3.0.0.min.js"></script>
            <script src="js/script.js"></script>
            <script src="js/custom1.js"></script>

            <!-- sidebar -->
            <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="js/custom.js"></script>
         </body>
</html>

