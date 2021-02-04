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

    
    
    <title>Document</title>
</head>
<body>
<!--code php procedural-->
<?php
 
 require_once '../database.php';
  

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
                    <a class="nav-link" href="index.php">Accueil</a>
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
        <center><h3>Se connecter:</h3></center>
    <?php

    //Nous allons recuperer le nom de l'utilisateur. si le formulaire a été posté
        if( isset($_POST) AND !empty($_POST)) {
            if(!empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password']))) { //on verifie si l'email et le user a été bien posté si c'est pas le cas -99
                $req = $db->prepare('SELECT * FROM utilisateurs WHERE username = :username AND password = :password');
                $req->execute([
                    'username' => $_POST['username'],
                    'password' => $_POST['password']
                ]);

                    //on va sauvegarder les données nouvelles dans une variable 
                $utilisateur = $req->fetchObject();
                if ($utilisateur) {// si les données sont exacte nous le redirigeons sur l'index page d'accueil sinon ligne 105
                    $_SESSION['admin'] =$_POST['username'];
                    header('Location:index.php');

                }else{
                    $error ='Veuillez rentrer vos identifiants correcte. !';

                }

            }
            else{//on affiche une erreur
                $error ='Veuillez remplir tous les champs !';
            }

        }

        if(isset($error)) {
            echo '<div class="error">'.$error.'</div>';

        }

    ?>
    <!--Formulaire de connexion-->
       <!--fin du Formulaire de connexion-->
       <div class="container connexion">
        <!---Permet d'avoir des div sur une meme lignes-->
       <div class="container">

          
                            <form action="login.php" method="POST">
                               
                                <div class="mb-6">
                                    <label for="email" class="form-label">Adresse Email</label>
                                    <input type="text" name="username"class="form-control" id="username" placeholder="Nom d'utilisateur" aria-describedby="Utilisateur">
                                </div>
                                <div class="mb-5">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
                                </div>
                                
                                <button type="submit" class="btn btn-primary" id="connexion">Se connecter</button>
                            </form>
                        
            
             <!--fin du Formulaire de connexion-->

    </div>

    
  <script src="../js/jquery/app.js"></script>
 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        