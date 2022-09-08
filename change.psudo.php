<?php
$php_pass   = "password";
$post_pass  = sanitize($_POST['pass']);

if($post_pass == $php_pass){
  setSqlValue(TRUE);
}

if($time == $midnight){
  setSqlValue = FALSE;
}

print('
  <form action="/action_page.php">
    <input type="password" id="pass" name="pass">
    <input type="submit">
  </form>
'); 
