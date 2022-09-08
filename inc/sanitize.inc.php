<?php
function makeSafer($n){
  $n= trim($n);
  $n= stripslashes($n);
  $n= htmlspecialchars($n);
  //$n= real_escape_string($n); //FIXME - untested line
  return $n;
}

//function makeSaferInt($n){
//  $n= makeSafer($n);
//  $n= intval($n); //make int
//  return $n;
//}


echo "<!--sanitize.inc.php-->\n";

//src:https://github.com/hellmak/2021_votes_bandnames/blob/main/inc/make-safer.inc.php
