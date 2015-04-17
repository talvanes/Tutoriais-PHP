<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>PHP Course Exercise 6</title>
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
    // include our file once
    require_once 'ValidateUser.php';
    
    // get $username and $password
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    // $username = "sconnor";
    // $password = "fatethatwemake";
    
    // let's check our $username
    echo "<p>";
    echo (ValidateUser($username, $password))? 
            "Welcome, <strong>$username</strong>!" 
            : "Try again";
    echo "</p>";
    ?>
  </body>
</html>
