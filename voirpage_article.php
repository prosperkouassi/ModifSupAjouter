<?php
//echo $_GET['id'];
?>
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
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="css/styles/styles.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!---->
    <link rel="stylesheet" href="css/toastr/toastr.min.css">
    
    
    <title>Document</title>
</head>
<body>

<?php
 require_once 'database.php';
 require_once 'function.php';

 $article = getArticle($db, 1, $_GET['id']);
 //var_dump($article);
 
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
                        <a class="nav-link btn_menu btn_moncompte" href="">admin</a>
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
        <h1><?= $article->titre ?></h1>
        <h4><?= $article->contenu ?></h4>
        <div class="row">
             <div class="col offset-s5 s4"> Par <em><?= $article->autor ?></em></div></div>
        </div>
    <!-- suprimer -->
    <!--  nous allons faire une condition si l'admin est connecté.
      si la session n'est pas vide-->
    <?php if(isset($_SESSION['admin']) AND !empty($_SESSION['admin'])): ?>

    <div class="row">
           <a href="delete_article.php?id=<?= $article->id ?>"><div class="action col s-4"><h5>Supprimer</h5></div></a>
           <a href="modifier_article.php?id=<?= $article->id ?>"><div class="action col s-4"><h5>Modifier</h5></div></a>
           <a href="admin/index.php"><div class="action col s-4"><h5>Espace administrateur</h5></div></a>
       
<?php endif ?>
</div>
<script src="../js/jquery/app.js"></script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
    