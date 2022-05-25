<?php
// Simple page redirect
function redirect($page){
    header('location: ' . URLROOT . '/' . $page);
}

function foo($a) {
    // Using global keyword
    global $abc;
    return $a;
}


  
function add() {
    // Using GLOBALS['var_name']
    $text = 'addfunction ' . $GLOBALS['abc'];
    echo $text;
}

