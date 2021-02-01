<?php
 include('bd_connection.php');

  $mysqli = new mysqli($host, $user, $password, $nameR);
  $text = filter_var(trim($_POST['review']), FILTER_SANITIZE_STRING);
  $login = $_COOKIE['user'];
 
  $res = $mysqli->query("INSERT INTO `review` (`id`, `login`, `text`) VALUES (NULL, '$login', '$text') ");
  
  header('Location: users_reviews.php');
  $mysqli -> close();
?>
