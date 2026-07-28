<?php
  // Se prendio esta mrd :v
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../../index.php');
  }

?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Tucano Peru Travel Boutique</title>
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="description" content="Travel to Peru">
    <meta name="author" content="Tucano Peru Travel Boutique">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
	    <link rel="stylesheet" href="css/code.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
   

</head>

<body>



    <!-- home
    ================================================== -->
    <main class="s-home s-home--slides">


      
      
        <div class="home-slider">
            <div class="home-slider-img" style="background-image: url(images/slides/slide-brand1.jpg);"></div>
            <div class="home-slider-img" style="background-image: url(images/slides/slide-brand2.jpg);"></div>
            <div class="home-slider-img" style="background-image: url(images/slides/slide-brand3.jpg);"></div>
         
        </div>

        <div class="overlay"></div>

        <div class="home-content">

            <div class="home-logo">
              
                    <img src="images/logo.svg" alt="Homepage">
              
            </div>

            <div class="row home-content__main">
                
               
              
			 

  
<h1>Descubre nuestras marcas</h1>
			  
<div class="m-dropdown">
  <div class="e-button open">
Selecciona tu experiencia

    <div class="e-burger">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <ul class="e-list">
    <li><a href="esp/peruluxury.php">Perú Luxury</a></li>
        <li><a href="esp/peruwellness.php">Perú Wellness</a></li>
    <li><a href="esp/perumice.php">Perú Mice</a></li>
    
    
    
  </ul>
</div>  

                </div>  <!-- end home-content__text -->

             

            </div>  <!-- end home-content__main -->

           

            <div class="row home-copyright">
                <span>Copyright  2024</span> 
                <span>Design by <a href="https://www.tucanoperu.com/">Tucano Peru Travel Boutique</a></span>
               

                <div class="col-eight home-content__text pull-right">
            </div> <!-- end home-copyright -->


          

        </div> <!-- end home-content -->

    </main> <!-- end s-home -->




    <!-- preloader
    ================================================== -->
    

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
	 <script src="js/code.js"></script>

</body>

</html>