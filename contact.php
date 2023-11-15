
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
            <a href="index.php"> <img src="images/logo.png" alt=""> </a>
           </div>
           <nav class="navbar">
             <div id="close-navbar" class="fas fa-times"></div>
             <a href="index.php">Inicio</a>
             <a href="about.php">Nosotros</a>
             <a href="we-do.php">Servicios</a>
             <a href="contact.php">Contacto</a>
             <a href="easyappointments/" target="_blank">Citas</a>
             <a href="signin.php">Iniciar sesión</a>
           </nav>
       
           <div id="menu-btn" class="fas fa-bars"></div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
        <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Contáctanos</h2>
                  </div>
               </div>
            </div>
            
         </div>
      </div>

      
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">

               <div class="col-md-6 offset-md-3">
                  <form id="request" class="main_form" method="post">
                     
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nombre Completo" type="type" name="name" required id="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Número de Celular" type="type" name="cellphone" required id="cellphone">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email " type="type" name="email" required id="email">
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Comentarios" type="type" name="comment" required id="message"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn" input type="submit" name="register">Enviar</button>
                        </div>
                     </div>
                  </form>
                  <?php 
                     include "configcontact/register.php"
                  ?>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3583.730186443148!2d-98.2868487249425!3d26.07507287715641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86650fe0baea41f7%3A0xef8d64194148893e!2sLizbeth%20Hair%20Sal%C3%B3n!5e0!3m2!1ses-419!2smx!4v1696943947198!5m2!1ses-419!2smx" width="600" height="386" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
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

      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

