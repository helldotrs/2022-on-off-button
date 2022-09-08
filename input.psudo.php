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

require('inc/sanitize.inc.php');

$php_pass   = "password";
$post_pass  = sanitize($_POST['pass']);

if($post_pass == $php_pass){
  setSqlValue(TRUE);
}



 
