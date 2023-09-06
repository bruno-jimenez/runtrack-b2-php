<?php

$haystack = "La Plateforme";
$needle = "a";

function my_str_search(string $needle, string $haystack): int {
    /*
     Setup the occurrence count 
    */
    $occurrences = substr_count($haystack, $needle);
    /*
     Echo the occurrences 
    */
    echo "Le nombre d'occurrence de la lettre '$needle' dans '$haystack' est '$occurrences'";
    
    return $occurrences; // Vous devez également renvoyer le résultat sous forme d'entier.
}

my_str_search($needle, $haystack);

?>