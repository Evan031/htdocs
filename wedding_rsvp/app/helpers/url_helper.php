<?php
// Simple page redirect
function redirect($page){
    header('location: ' . URLROOT . '/' . $page);
}

function foo($a) {
    // Using global keyword
    global $a;
    return $a;
}

foo('whatever');
  
function add() {
    // Using GLOBALS['var_name']
    $text = 'addfunction ' . $GLOBALS['a'];
    return $text;
}

