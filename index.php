<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <?php if(isset($_POST['mdp']) AND $_POST['mdp'] == "mjmprofesseur"){ ?>

    <!-- DEBUT RAPPORT DE STAGE
    ====================================== -->

    Bonjour professeur

    <!-- FORMULAIRE DE CONTACT
    ====================================== -->

    <?php
    } else{
    ?>
    <div class="homepage">
      <div class="in">
        <div class="homepage-title">
          <h1>Compte rendu d'alternance</h1>
          <h2>MJM année 2015 / 2016</h2>
          <h3>KONG Alexandre</h3>
        </div>
        <div class="formulaire">
          <fieldset>
            <form class="" method="post">
              <label for="mdp">Mot de passe:</label>
              <input type="text" name="mdp" value="" placeholder="Saisir le mot de passe" id="inputting">
              <input class="button" type="submit" name="name" value="Envoyer" id="submitting">
            </form>
          </fieldset>
        </div>
        <div class="red"><?php if(isset($_POST['mdp']) AND $_POST['mdp'] != "mjmprofesseur"){ echo 'Mauvais mot de passe, réessayez'; } ?></div>
      </div>
    </div>
    <?php
    }
    ?>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
