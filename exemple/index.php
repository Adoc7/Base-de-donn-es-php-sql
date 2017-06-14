<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="./bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
      <link href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="./bootstrap-3.3.7-dist/fonts" rel="text/css">
      <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great%7CSource+Sans+Pro" rel="stylesheet">
      <script src="jquery-3.2.1.js"></script>
      <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
      <link rel="stylesheet"href="style.css"/>
      <title>Dojo-wikicoda-pizza</title>
    </head>
    <body>

    <header>
      <img id="logo"src="images/logo2.png" alt="logo">
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="script.php">Liste commandes</a></li>
      </ul>
      <img id="strap"src="images/bg_top.jpg">
    </header>

    <div class="ensemble">
    <form method="post" action="script.php">
    <section class="top">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
          <div class="menulogo">
          <div><img src="images/logo.png" alt="logo pizza">
            <div class="ligne"></div>
          </div>
        <input id="btn" type="submit" value="VALIDER LA COMMANDE"></input>
        <h1> WikiCoda </h1>
        </div>
      </div>

        <div class="formulaire col-xs-12 col-sm-12 col-md-6">
          <h2>COMMANDER</h2>
          <p>Remplir le formulaire...</p>

            <input id="Name" name="name" placeholder="Nom" value=""><br>
            <input id="Tel" name="tel" placeholder="Téléphone" value=""><br>
            <textarea id="Address" name="address" placeholder="Adresse" row="5" value=""></textarea>

          <p>Et choisissez vos pizzas, puis valider la commande !</p>
        </div>
      </div>
    </section>

    <section class="bottom">
      <div class="container">
        <div class="row">
          <div class="box col-xs-12 col-sm-6 col-md-4">
            <div class="content">
            <img class="pizza" src="images/order1.png">
            <h3>4 FRAMEWORKS <span>12 €</span></h3><br>
            <p>Quantité</p><input type="number" name="pizza1" min="0" max="99" value="0">
            </div>
          </div>
          <div class="box col-xs-12 col-sm-6 col-md-4">
            <div class="content">
            <img class="pizza" src="images/order2.png">
            <h3>GIT PUSH PIZZA  <span>10 €</span></h3><br>
            <p>Quantité</p><input type="number" name="pizza2" min="0" max="99" value="0">
          </div>
        </div>
          <div class="box col-xs-12 col-sm-6 col-md-4">
            <div class="content">
            <img class="pizza" src="images/order3.png">
            <h3>BEAUTIFUL CSS  <span>9 €</span></h3><br>
            <p>Quantité</p><input type="number" name="pizza3" min="0" max="99" value="0">
          </div>
        </div>
          <div class="box col-xs-12 col-sm-6 col-md-4">
            <div class="content">
            <img class="pizza" src="images/order4.png">
            <h3>JQUERY UI  <span>11 €</span></h3><br>
            <p>Quantité</p><input type="number" name="pizza4" min="0" max="99" value="0">
          </div>
        </div>
          <div class="box col-xs-12 col-sm-6 col-md-4">
            <div class="content">
            <img class="pizza" src="images/order5.png">
            <h3>LA BOOTSTRAP  <span>9 €</span></h3><br>
            <p>Quantité</p><input type="number" name="pizza5" min="0" max="99" value="0">
          </div>
        </div>
          <div class="box col-xs-12 col-sm-6 col-md-4">
            <div class="content">
            <img class="pizza" src="images/order6.png">
            <h3>L'HTML AU SEO  <span>8 €</span></h3><br>
            <p>Quantité</p><input type="number" name="pizza6" min="0" max="99" value="0">
            </form>
          </div>
        </div>
      </div>
      </div>
    </section>
  </div>
    </body>
</html>
