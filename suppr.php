<?php

// ouverture d'une connexion à la BDD

$var_article='var_article';

$objetPdo = new PDO('mysql:host=localhost;dbname=Exo_article','root','Adoc7');
// préparation de la requête
$pdoStat=$objetPdo->prepare('DELETE * FROM article WHERE id=:num LIMIT 1');
// liaison du paramètre nommé
$pdoStat->bindValue(':num',$_GET[$var_article], pdo::PARAM_INT);

// execution de la requête
$executeIsOk=$pdoStat->execute();
var_dump($var_article);
if($executeIsOk){
  $message="L'article a été supprimé";
  }
  else{
      $message="Echec de la suppression d'article";
  }
 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport"
       content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" >
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <title>Document</title>
   </head>
   <body>
     <h1>Suppression</h1>
     <p><?= $message ?></p>
   </body>
 </html>
