<?php

 $login = filter_var(trim($_POST['logreg']), FILTER_SANITIZE_STRING);
 $name = filter_var(trim($_POST['namereg']), FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['passreg']), FILTER_SANITIZE_STRING);

  if(mb_strlen($login) < 1 || mb_strlen($login) > 90) {
      echo "Uncorrect login length";
      exit();
  }
  if(mb_strlen($name) < 1 || mb_strlen($name) > 40) {
    echo "Uncorrect name length";
    exit();
}
    if(mb_strlen($pass) < 1 || mb_strlen($pass) > 40) {
    echo "Uncorrect password length";
    exit();
}


 include('bd_connection.php');

  $mysqli = new mysqli($host, $user, $password, $nameU);


  $mysqli->query("INSERT INTO `users` (`id`, `name`, `login`, `password`) VALUES (NULL, '$name', '$login', '$pass')");
  header('Location: /practice/');

  $mysqli -> close();
?>