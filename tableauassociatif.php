<?php
$tableau_index = ["lundi", "mardi", "mercredi"]; // automatiquemet php affecte un index a chaque vvaleur; O 1 2
$tableau_associatif = [
    "premier" => "lundi", // index = valeur 
    "deuxième" => "mardi",
    "dernier" => "mercredi"
];
var_dump($tableau_associatif);
// pour recuperer une valeur , on prend echo 
echo $tableau_associatif["dernier"];

$tableau_special = [
    "  " => "element2",
    0 => "element3",
    "second" => "element final"
];
var_dump($tableau_special);
echo $tableau_special[0];// elemnt 1