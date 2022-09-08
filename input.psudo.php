<?php

//print html
print('
  <form action="/action_page.php">
    <input type="password" id="pass" name="pass">
    <input type="submit">
  </form>
');

//kill page if no input found
if (!$_POST['pass']){
  die();
}

//IMPORT CONNECT SQL HERE

require('sql/login-info.inc.php');
require('sql/connect.inc.php');
require('inc/sanitize.inc.php');
require('inc/password.inc.php');

$post_pass  = sanitize($_POST['pass']);

if($post_pass == $php_pass){

  $sql = "INSERT INTO hellmak-on-ff (only_value)
  VALUES (TRUE)";

  if ($conn->query($sql) === TRUE) {
    print ":)";
  } else {
    print "Error: " . $sql . " " . $conn->error;
    print "<br >Error: 23941";
  }

  $conn->close();
}else{
  $conn->close();
  die();
}



 
