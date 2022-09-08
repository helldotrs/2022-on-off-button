<?php

require('sql/login-info.inc.php');
require('sql/connect.inc.php');
require('inc/sanitize.inc.php');

$button_value = sanitize(fetch_sql_boolean()); //FIX ME

//HTML:
print('<!DOCTYPE html><html><head></head><body><pre><h1>');

if($button_value){
  print("<p style="color:green">:)</p>");
}else{
  print("<p style="color:red">:(</p>");
}
