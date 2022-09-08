<?php

$button_value = fetch_sql_boolean();

if($button){
  print("<p style="color:green">:)</p>");
}else{
  print("<p style="color:red">:(</p>");
}
