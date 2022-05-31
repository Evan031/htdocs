<?php

function graph_array($array, &$x_names, &$y_values)
{
    foreach ($array as $key => $value) {
        array_push($x_names, $key);
        array_push($y_values, $value);
    }
}