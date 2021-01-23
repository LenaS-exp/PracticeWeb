<?php
 include('bd_connection.php');

  $mysqli = new mysqli($host, $user, $password, $nameQ);
  $quot = filter_var(trim($_POST['quot']), FILTER_SANITIZE_STRING);
  $au = filter_var(trim($_POST['authorq']), FILTER_SANITIZE_STRING);
 
  $res = $mysqli->query("INSERT INTO `quote` (`id`, `qtext`, `author`) VALUES (NULL, '$quot', '$au') ");
  
  header('Location: /practice/quotes.php');
  $mysqli -> close();
?>