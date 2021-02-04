<?php
session_start();
require_once 'database.php';
if(isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
   //verifier si nous avons bien transmit l'url en cliquant sur le bouton sup
   if(isset($_GET['id'])) {
       $req =$db->query('SELECT * FROM article WHERE id = '.$_GET['id']);
       $article = $req->fetch();
       if($article) {
        $req =$db->query('DELETE FROM article WHERE id = '.$_GET['id']);
        header('location :index.php');
       }
       else{
        header('location :index.php');
       }

   }

}else{
    header('location :index.php');
}
