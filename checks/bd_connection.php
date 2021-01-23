
<?php

function create_table($res) {
  while (($row = $res -> fetch_assoc()) != false) {
    echo "<tr>";
        for ($j = 0 ; $j < 3; $j++){
          if ($j == 0) $tmp = 'id';
          if ($j == 1) $tmp = 'name';
          if ($j == 2) $tmp = 'login';
          
          $key = $row[$tmp];
          echo "<td>$key</td>";
        } 
    echo "</tr>";
   }
}

  $host = 'localhost';
  $user = 'root';
  $password = 'root';
  $nameR = 'reviews';
  $nameU = 'testdb';
  $nameQ = 'quots';

  ?>