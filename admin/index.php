<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
     integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
     <!--!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="../css/styles/styles.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!---->
    <link rel="stylesheet" href="../css/toastr/toastr.min.css">
    
    
    <title>Document</title>
</head>
<body>
<!--code php procedural-->
<?php

 require_once '../database.php';
 if (!$_SESSION['admin']) {
     header('Location:login.php');

 }

?>



<nav class="navbar mt-3 mb-5 p-0 navbar-expand-lg stroke fill">
    <img src="image/burotic.png" alt="">
    <div class="container-fluid text-logo">
        <a class="navbar-brand" href="#"><b></b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <!-- MENU -->
        <div class=" collapse navbar-collapse  justify-content-center" id="navbarSupportedContent">    
            <!-- NAVIGATION -->
            <ul class="navbar-nav menu">                
                 <li class="nav-item">
                 <a class="nav-link" href="">Accueil</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="">À propos</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="">Nos formations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">Galeries</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">Réservation</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="">Contact</a>
                </li>            
            </ul>
        </div>

        <div>
            <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="admin/"><i class="material-icons">perm_identity</i><Accueil</a>
                </li>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link btn_menu btn_deconnexion" href="{{ path('app_logout') }}"></a>
                    </li> 

                    <!-- <li class="nav-item">
                        <a data-toggle="modal" data-target="#loginModal" class="nav-link btn_menu btn_connexion" href="{{ path('app_login') }}">Connexion</a>
                    </li> -->
            </ul>

        </div>
    </nav>
    
    <div class="container">
        <h3>Bienvenue <?=$_SESSION['admin']  ?></h3>
    <?php
  

    ?>

    </div>

    
  <script src="../js/jquery/app.js"></script>
 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
  </html>
        