<?php
include "config.php";
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<?php
 $connect = mysqli_connect("localhost", "root", "", "stronka");
 $connect->set_charset("utf8");
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


    <?php
      include "navbar.php";
      ?>

        <div class="container">
            <div class="row">

                <?php
                include "menu.php";
                ?>

                <div class="col-md-9">
                    <div class="panel panel-default">
                    <div class="panel-body">
                     <?php
                        include "config.php";
                        if(isset($_POST['cel'])&&isset($_POST['koszt'])){
                            $cel=$_POST['cel'];
                            $koszt=($_POST['koszt']);



                               $sql="INSERT INTO wydatki (cel, koszt) VALUES ( '$cel', '$koszt')";

                                if($connect->query($sql)== TRUE){
                                ?>
                                <script>window.location.href='data.php'</script>
                                <?php }

                            else{
                                ?>
                                  <div class="alert alert-danger alert-dismissible" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <strong>Upss!</strong>Coś poszło nie tak.
</div>
                                <?php
                            }
                        }
                     ?>
                      <form method="post" id="formal">
                          <div class="form-group">
                              <label>Cel</label>
                              <input type="text"  class="form-control" name="cel" required/>
                          </div>
                          <div class="form-group">
                              <label>Koszt</label>
                              <input type="number"  class="form-control" name="koszt" required/>
                          </div>

                          <input type="submit" value="Dodaj Dane" class="btn btn-primary" />


                      </form>

                    </div>
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
