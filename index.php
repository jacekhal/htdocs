<?php
include "config.php";
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="pl_PL">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wydatki spółdzielni "Jaskółka"</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

           <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Spółdzielnia Jaskółka</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Strona główna <span class="sr-only">(current)</span></a></li>

                <li><a href="#">Wiadomości</a></li>
                <li><a href="#">Dane</a></li>
                <?php
                  if($_SESSION['type']=='Administrator'){

                  ?>
                <li><a href="#">Dodaj Dane</a></li>
                <li><a href="#">Ustawienia</a></li>
                <?php
                  }else{
                  ?>
                <li><a href="#">Profil</a></li>
                <li class="list-group-item">Profile</li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <?php
                  }
                  ?>
              </ul>
              <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Szukaj</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>


        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <ul class="list-group">
                      <a href="#" class="list-group-item">Wiadomości</a>
                      <a href="#" class="list-group-item">Dane</a>
                          <?php
                          if($_SESSION['type']=='Administrator'){

                          ?>
                      <a href="#" class="list-group-item">Dodaj Dane</a>
                      <a href="#" class="list-group-item">Ustawienia</a>
                      <?php
                          }else{

                      ?>
                      <a href="#" class="list-group-item">Profil</a>
                      <?php
                      }

                      ?>
                      <a href="logout.php"class="list-group-item">Logout</a>
                    </ul>
                </div>

                <div class="col-md-9">
                    <div class="jumbotron">
                             <?php
                              if($_SESSION['type']=='Administrator'){

                              ?>
                              <h1>Witaj administratorze!</h1>
                              <p>Witamy na stronie dotyczącej budżetu spółdzielni "Jaskółka".</p>
                              <?php
                              }else{

                              ?>
                              <h1>Witaj użytkowniku!</h1>
                              <p>Witamy na stronie dotyczącej budżetu spółdzielni "Jaskółka".</p>
                               <?php
                              }

                              ?>
                              <p><a class="btn btn-primary btn-lg" href="#" role="button">Dowiedz się więcej</a></p>
                    </div>
                </div>
            </div>
        </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
