<?php
function my_str_search(string $needle, string $haystack) : int {

$haystack = "La Plateforme";
$needle = "a";
/*
 Setup the occurence count 
*/
    $occurences = substr_count($haystack, $needle);
/*
 echo the occurences 
*/
    echo "le nombre d'occurence de la lettre '$needle' dans '$haystack' est '$occurences'";
    
    return $occurences;
}

my_str_search($needle, $haystack);
?>