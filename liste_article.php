
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
  <link href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap-3.3.7-dist/fonts" rel="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100|Roboto:100" rel="stylesheet">
  <script src="jquery-3.2.1.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Journal</title>
</head>

<body>
  <header>
    <nav>
    <ul>
      <li><a href="index.html">Ajouter un article</a></li>
      <li><a href="liste_article.php">Liste des articles</a></li>
    </ul>
  </nav>

  </header>
<!-- <section>
    <h1>Liste des articles</h1>
</section> -->


  <?php
  include("connect.php");

  $reponse = $pdo->query('SELECT * FROM articles');
  $reponse1 = $reponse->fetchAll();

  foreach ($reponse1 as $value) {
  //   $prixtotal = $value->Pizza1*12 + $value->Pizza2*10 + $value->Pizza3*9 + $value->Pizza4*11 + $value->Pizza5*9 + $value->Pizza6*8;
      echo '<p>Article ecrit le : '.$value->date.'</p>
      <p>Titre : '.$value->title.'</p>
      <img src=./upload/' .$value->image.'>
      <p> Article : '.$value->article_content . '</p>
      <hr>';
  }
  ?>
</body>
</html>
