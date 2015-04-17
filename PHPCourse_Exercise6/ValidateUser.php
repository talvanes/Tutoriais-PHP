<?php
function ValidateUser($username, $password) {
  //An static associative array tnat stores users' names and passwords
  static $storedUsersArray = array(
        "zsmith" => "theheadmaster",
        "rtam" => "letsbeginagain",
        "q" => "continuum",
        "sconnor" => "fatethatwemake",
        "boogie" => "IMakeThisOneForYou",
        "gta8304" => "jaçsof8y9824",
        "kirk" => "primedirective",
        "talba" => "dice-pork-caue"
    );
  // Now let's lookup our $username and $password in our 'DB' array
  $found = FALSE;
  foreach ($storedUsersArray as $storedUsername => $storedPassword) {
    if (!$found){
      if($storedUsername == $username && $storedPassword == $password) {
        // user's credentials DO match, so let him/her enter...
        $found = TRUE;
      } else {
        // user's credentials DO NOT match. There's a problem here...
        $found = FALSE;
      }
    }
  }
  // now return if our $username could be authenticated
  return $found;
}

