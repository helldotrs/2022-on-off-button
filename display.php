<?php

require('sql/login-info.inc.php');
require('sql/connect.inc.php');
require('inc/sanitize.inc.php');

$button_value = sanitize(fetch_sql_boolean()); //FIX ME

//fetch value
$sql = "SELECT only_value FROM hellmak-on-off";
$result = $conn->query($sql);
$button_value = sanitize($sql);
$conn->close();

//HTML:
print('<!DOCTYPE html><html><head></head><body><pre><h1><p style="size:100px;');

if($button_value){
  print('color:green">:)');
}else{
  print('color:red">:(');
}

print('</p><pre></body></html>');
