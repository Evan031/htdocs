<?php
// Array with names
$guest_array = $_SESSION["guest_list"];

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($a as $x => $val) {
        if (stristr($q, substr($val, 0, $len))) {
            if ($hint === "") {
                $hint =  "<li>$val</li>";
            } else {
                $hint .= "<li>$val</li>";
            }
        }
    }
}


// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "<li>There is noone by that name</li>" : $hint;





