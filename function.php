<?php
function getArticle($db, $nbreArticle = null, $id = null){
    if ($nbreArticle AND !$id) {
        $req = $db->query('SELECT * FROM article LIMIT'.$nbreArticle);
        $articles = $req->fetchAll();
       
    }elseif($id){
       $req = $db->query('SELECT * FROM article WHERE id ='.$id);
       $articles = $req->fetchObject();

    }else{
        $req =$db->query('SELECT * FROM article');
        $articles =$req->fetchall();
    }
    return $articles;
    //https://www.youtube.com/watch?v=QwS4QKSb4Rs
}