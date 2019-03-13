<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>BankAutobahn</title>
  </head>
  <body>

    <!-- The light/dark theme switch. Must be placed on top of the main class -->
    <input type="checkbox" id="liSwi">
    <div id="lightSwitch">
      <label for="liSwi"><i class="far fa-lightbulb"></i></label>
    </div>

    <!-- The page to display must be placed here for the light/dark theme switch to work -->
    <div class="main">

      <div class="navbar navbar-expand-md fixed-top shadow-sm">
            <a class="navbar-brand active" tabindex="#">
              <img src="http://lorempixel.com/output/cats-q-c-640-640-3.jpg" height="30" width="30" class="d-inline-block align-top" alt="Brand logo">
              BankAutobahn
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
              <a tabindex="#" class="navbar-item nav-link active">Home <span class="sr-only">(current)</span></a>
              <a href="espacperso.php" class="nav-item nav-link">Espace personnel</a>
              <a href="informations.php" class="nav-item nav-link">Informations</a>
              <a href="telechargements.php" class="nav-item nav-link">Téléchargements</a>
            </div>
            <button type="button" class="btn btn-secondary ml-auto" data-toggle="modal" data-target="#loginModal">Se connecter</button>
          </div>
        </div>

      <div class="container-fluid header mb-4 mt-5">
        <div class="title">Bienvenue dans la<br>BankAutobahn</div>
      </div>

      <div class="container mb-4">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-12">
                <div class="card mb-4 shadow-sm">
                  <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-6">
                <div class="card mb-4 shadow-sm">
                  <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-6">
                <div class="card mb-4 shadow-sm">
                  <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Infos</h5>
                <p class="card-text">[Name Here]
                <br>[Capital Here]</p>
                <a href="#" class="btn btn-secondary"> first button</a>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- Conection modal box -->
      <div class="modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Se connecter</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="index.php" method="post">
                <div class="form-group">
                  <label for="accountId">ID de compte</label>
                  <input type="number" class="form-control" maxlength="10" id="accountId" required>
                </div>
                <div class="form-group">
                  <label for="accountPassword">Mot de passe</label>
                  <input type="password" class="form-control" id="accountPassword" required>
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
              </form>
              <a href="creacompte.php" class="text-decoration-none"><p class="text-center font-weight-light">créer un comte</p></a>
            </div>
          </div>
        </div>
      </div>




    </div>


    <!-- Script loaded after the page -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="bootstrap-4.2.1-dist/js/bootstrap.min.js"> -->

    <script src="http://localhost:35729/livereload.js" type="text/javascript">

    </script>

  </body>
</html>
