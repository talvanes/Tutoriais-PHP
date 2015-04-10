<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>PHP Course Exercise 4</title>
    <style>
      p {
        margin-bottom: 30px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <?php
    // for loop
    echo "<p>";
    for($i = 10; $i >= 0; $i--){
      echo "Counter variable nº $i<br/>";
    }
    echo "</p>";
    
    // while loop
    echo "<p>";
    $j = 0;
    while($j <= 10){
      $sq = $j * $j;
      echo "$j<sup>2</sup> = $sq<br/>";
      $j++;
    }
    echo "</p>";
    ?>
  </body>
</html>
