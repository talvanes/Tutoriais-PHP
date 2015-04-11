<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Exercise 5</title>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
          method="post"
          autocomplete="off">
      <p>
        <label for="username">Username: </label>
        <input type="text" id="username" name="username" required/>
      </p>
      <p>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required/>
      </p>
      <p>
        <button type="submit">Send</button>
      </p>
    </form>
    <?php
    //User's name and password typed in by the user
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    
    //An associative array tnat stores users' names and passwords
    $storedUsersArray = array(
        "zsmith" => "theheadmaster",
        "rtam" => "letsbeginagain",
        "q" => "continuum",
        "sconnor" => "fatethatwemake",
        "boogie" => "IMakeThisOneForYou",
        "gta8304" => "jaçsof8y9824",
        "kirk" => "primedirective",
        "talba" => "dice-pork-caue"
    );
    
    // Now find the $password associated with the $username
    $found = FALSE;
    foreach ($storedUsersArray as $storedUsername => $storedPassword){
      // Let's [try to] find username and password
      if (!$found){
        if($storedUsername == $username){
          // User found, but there's no guarantee for password
          if($storedPassword == $password){
            // Password matches
            $found = TRUE;
          }else{
            // Password doesn't match
            $found = FALSE;
          }
        }else{
          // User not found
          $found = FALSE;
        }
      }
    }
    
    // Show username and password
    echo "<p>";
    if ($found) {
      echo "Welcome, <strong>$username</strong>!"; 
    } else {
      echo "Try again";
    }
    echo "</p>";
    ?>
  </body>
</html>
