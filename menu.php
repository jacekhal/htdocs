<div class="col-md-3">
                    <ul class="list-group">
                      <a href="news.php" class="list-group-item">Wiadomości</a>
                      <a href="data.php" class="list-group-item">Dane</a>
                          <?php
                          if($_SESSION['type']=='Administrator'){

                          ?>
                      <a href="addData.php" class="list-group-item">Dodaj Dane</a>
                      <a href="addNews.php" class="list-group-item">Dodaj wiadomość</a>
                      <a href="users.php" class="list-group-item">Lista użytkowników</a>
                      <?php
                          }else{

                      ?>
                      <a href="profile.php" class="list-group-item">Profil</a>
                      <?php
                      }

                      ?>
                      <a href="logout.php"class="list-group-item">Logout</a>
                    </ul>
                </div>
