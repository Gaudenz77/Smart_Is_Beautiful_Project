<?php

function prettyPrint($value, $label) {
    if ($label) print "<pre>$label";
    else print "<pre>";
    
    print_r($value);
    print "</pre>";
}

?>

