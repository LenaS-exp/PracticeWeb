<?php

 $login = filter_var(trim($_POST['logauth']), FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['passauth']), FILTER_SANITIZE_STRING);
 
 include('bd_connection.php');


 $mysqli = new mysqli($host, $user, $password, $nameU);
 
  $res = $mysqli->query("SELECT * FROM users WHERE login='$login' AND password='$pass'");
  
  $user = $res -> fetch_assoc();
    
  if(count($user) == 0) {
      echo "User not founded";
      echo $login;
      echo $pass;
      exit();
  }
  
  

  setcookie('user', $user['login'], time() + 3600, '/');
  

 
  header('Location: /practice/');
  $mysqli -> close();
?>