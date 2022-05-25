<?php
// Array with names

// get the q parameter from URL
function ajax_helper($a){
  $q = $_REQUEST["q"];

  $hint = "";
  
  // lookup all hints from array if $q is different from ""
  if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $x => $val) {
      if (stristr($q, substr($val, 0, $len))) {
        if ($hint === "") {
          $hint =  "<li><a href='/php_test/index.php?guest_id=$x'>$val</a></li>";
        } else {
          $hint .= "<li><a href='/php_test/index.php?guest_id=$x'>$val</a></li>";
        }
      }
    }
  }
  
  
  // Output "no suggestion" if no hint was found or output correct values
  echo $hint === "" ? "<li>There is noone by that name</li>" : $hint;
}

$array = array(1 => "Peter", 2 => "Ben", 3=> "Joe", 4=> "Juan");

ajax_helper($array);