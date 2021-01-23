<?php
 include('checks/bd_connection.php');


  $mysqli = new mysqli($host, $user, $password, $nameU);
	
  $mysqli->query("SET NAMES 'utf8'");
  $res = $mysqli->query("SELECT * FROM `users`");
  $mysqli -> close();

  $mysqli = new mysqli($host, $user, $password, $nameR);
	
  $mysqli->query("SET NAMES 'utf8'");
  $pew = $mysqli->query("SELECT * FROM review");
  $c = $mysqli->query("SELECT COUNT('login') AS count FROM review");
  $ct = $c -> fetch_assoc();
  $count = $ct['count'];
  $mysqli -> close();
  
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Love | Users</title>
 
  
  <link rel="stylesheet" href="main2.css">
</head>
<body>
    <?php include('dops/navbar.php') ?>

  <div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-offset-2">
          <h1>Users Community</h1>
          <h2>The dead poets society</h2>
        
       
        </div>
      </div>
    </div>
  </div>


  <ul class="nav nav-tabs nav-fill bg-dark shadow" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active " id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Отзывы</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link " id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Пользователи</a>
  </li>
  
</ul>

  <!-- ОТЗЫВЫ -->
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
   
  <br>
          <div class="row centered">
          
                <div class="col-lg-5 shadow p-3 mb-5 bg-white rounded">
                  <br><br>
                  <div class="container">
                    
                    <h5 class="sometxt ltxt">Reviews Tab:</h5> 
                    <p>
                        <ul class="list-unstyled ltxt">
                          <li>Вы можете написать свой отзыв:</li>
                      <ul>
                        <li>Поделиться жизненным опытом</li>
                        <li>Рассказать о своей любви</li>
                        <li>Поделиться любимыми цитатами</li>
                        <li>Рассказать о любимом фильме или книге</li>
                        <li>Поделиться мнением о сайте</li>  
                          </ul>
                        </ul>
                        </p>
                     
                     
                  </div>
                </div>
                <br><br><br><br>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                  <br><br>

                   <h5 class="sometxt">Write a Review:</h5> 
                      <form method="post" action="checks/check_rev.php">
                      <div class="mb-3">
                        <label for="review" class="form-label">Текст отзыва</label>
                        <textarea class="form-control" id="review" name="review" rows="7"></textarea>
                      </div>
                      <?php 
                       if($_COOKIE['user'] != ''):?> 
                     <button type="submit" class="btn btn-outline-info btn-lg">Отправить</a>
                     <?php endif; ?>
                     <?php 
                       if($_COOKIE['user'] == ''):?> 
                        <p class="text-danger">Для отправки отзыва необходимо Авторизироваться!</p>
                       <button type="submit" class="btn btn-outline-info btn-lg disabled" >Отправить</a>
                     <?php endif; ?>
                      </form>
                      

                                
                </div><div class="col-lg-1"></div>
                                           
        </div>
        <br><hr><br><br>
        <h5 class="sometxt ltxtt">All Reviews:</h5> 
        <div class="row ltxt"> 
              
              <?php include('dops/create_rev.php')?>
        </div>



  </div>
  




 
  <!-- ПОЛЬЗОВАТЕЛИ -->
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class="container wb">
      <div class="row centered">
      <br><br>
      <div class="col-lg-offset-2">
        <h4 class="sometxt">Пользователи</h4>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th><th scope="col">Name</th><th scope="col">Login</th>   
                    </tr>
                </thead>
                <tbody>
                    <?php create_table($res) ?>       
                </tbody>
                </table>
          </div>
          <div class="col-lg-2"></div>       
        </div>
        </div>
  </div>

</div>





        









  





  
 



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" 
  integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" 
integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>




