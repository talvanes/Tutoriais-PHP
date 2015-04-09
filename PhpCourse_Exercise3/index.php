<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Exercise 3</title>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
          method="post"
          autocomplete="off">
      <p>
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" />
      </p>
      <p>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" />
      </p>
      <p>
        <button type="submit">Send</button>
      </p>
    </form>
    <?php
    //User's name and password typed in by the user
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    //User's name and password stored in the database
    $storedUsername = "kirk";
    $storedPassword = "primedirective";
    
    //Now validate those data by comparing username and password
    echo "<p>";
    if ($username == $storedUsername){
      if ($password == $storedPassword){
        echo "Live long and prosper";
      } else {
        echo "Please try again";
      }
    } else {
      echo "Please try again";
    }
    echo "</p>";
    ?>
  </body>
</html>
