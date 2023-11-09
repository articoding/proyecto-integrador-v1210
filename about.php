<?php
   require 'config/databaseServices.php';
   $db = new Database();
   $conn = $db->conectar();
   
   $sql = $conn->prepare("SELECT * FROM aboutus");
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.jpg" type="image/jpg" />
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
      </header>
      <!-- end header inner -->
      <!-- end header -->


      <!-- about us -->

      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Sobre Nosotros</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <section class="about2" id="about2">


      <div class="row" >

         <div class="image">
            <img src="images/about.jpg" alt="">
         </div>


         <?php foreach($resultado as $row){ ?>
         <div class="content">
            <h3 class="title">Historia</h3>
            <p><?php echo $row['historia'] ?></p>        
            <h3 class="title">Nuestra Misión</h3>
            <p><?php echo $row['mision'] ?> </p>
            <h3 class="title">Nuestros Valores</h3>
            <p><?php echo $row['valores'] ?> </p>
            <?php } ?>

            <div class="icons-container">
                  <div class="icons">
                     <img src="images/about-1.png" alt="">
                     <h3>Heramientas profesionales</h3>
                  </div>
                  <div class="icons">
                     <img src="images/about-icon-2.png" alt="">
                     <h3>Productos de la más alta calidad</h3>
                  </div>
                  <div class="icons">
                     <img src="images/about-icon-3.png" alt="">
                     <h3>Lavado de cabello</h3>
                  </div>
               </div>
         </div>

      </div>

   </section>

<!-- about us end -->
     
   

      

      <!-- end about -->
   
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
      
         <div class="credit" id="copyright"> &copy 2023 <span>Lizbeth Hair Salon</span> | Todos los derechos reservados. </div>
      
      </section>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/script.js"></script>

      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

