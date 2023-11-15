<?php

// Configuración de la base de datos
$dsn = 'mysql:host=localhost;dbname=easyappointments';
$usuario = 'easyappointments';
$contrasena = 'easy_32point';

try {
    // Crear una nueva instancia de PDO
    $conexion = new PDO($dsn, $usuario, $contrasena);

    // Configurar PDO para que lance excepciones en caso de errores
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL para obtener los servicios desde la base de datos
    $consulta = "SELECT * FROM services";

    // Preparar la consulta
    $stmt = $conexion->prepare($consulta);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener los resultados como un array asociativo
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Iterar sobre los resultados y mostrar los servicios
    
} catch (PDOException $e) {
    // Capturar y manejar errores de la base de datos
    echo 'Error: ' . $e->getMessage();
}
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
                  <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-J30NHERWHB"></script>
            <script>
               window.dataLayer = window.dataLayer || [];
               function gtag(){dataLayer.push(arguments);}
               gtag('js', new Date());

               gtag('config', 'G-J30NHERWHB');
            </script>
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
            <!-- end header -->

            <!-- Start Menu -->
            <div class="menu-box">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading-title text-center">
                           <h2>¡Descubre la excelencia en belleza!</h2>
                           <p>En Lizbeth Hair Salon te ofrecemos una amplia variedad de servicios </p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
               
               
                  <div class="col-lg-12">


                        <div class="special-menu text-center">
                           <div class="button-group filter-button-group">
                              <button class="active" data-filter="*">Todas</button>
                              <button data-filter=".Cabello">Cabello</button>
                              <button data-filter=".Tratamientos">Tratamientos capilares</button>
                              <button data-filter=".Manos">Manos</button>
                              <button data-filter=".Pies">Pies</button>
                              <button data-filter=".Pestanas">Pestañas</button>
                              <button data-filter=".Maquillaje">Maquillaje</button>
                              <button data-filter=".Rostro">Rostro</button>
                              <button data-filter=".Cuerpo">Cuerpo</button>

                           </div>
                        </div>
                     </div>
                  </div>

                  
                  <div class="row special-list">
                     <?php foreach ($resultados as $servicio) { ?>
                     <div class="col-lg-4 col-md-6 special-grid <?php echo $servicio['categories']; ?>">
                     <div class="gallery-single fix">
                     <img src="./images/Servicios/<?php echo $servicio['Serv_img']; ?>" class="img-fluid image-click" data-details="" alt="image">
                     <div class="why-text">;
                     <h4><?php echo $servicio['Serv_name']; ?></h4>
                     <p><?php echo $servicio['Serv_description']; ?></p>
                     <h5><?php echo $servicio['Serv_price']; ?></h5>
                     </div>
                     
                     </div>
                     </div>
                     <?php } ?>
                     </div>
                     
                    
                     
                    
                  </div>
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
            <script src="js/buttons.js"></script>


            <!-- sidebar -->
            <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="js/custom.js"></script>
            <script src="js/isotope.min.js"></script>
            <script src="js/baguetteBox.min.js"></script>
            <script src="js/images-loded.min.js"></script>
            <script src="js/jquery.superslides.min.js"></script>


         </body>
</html>

