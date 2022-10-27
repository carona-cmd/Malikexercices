<?php
// fonctions a connaitre par coeur pour pouvoir manipuler les donénes 
// array functions
// https ://www.php.net/manual/fr/ref.array.php 
//=> liste complete d etoutes les natives de php  pour 
// manipuler les tableaux

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry", 1, false, [1, 2]);
print_r($stack) . PHP_EOL;
// $stack =["orange", "banana"]: arret push ajoute des elements
// au tableau; cela ajoute des elemenst a la suite d un tableau

array_unshift($stack, "lundi", "mardi"); // RAJOUTE É ELEMENTS AU DÉBUT
var_dump($stack);
// creer panier 
$panier = []; // tableau vide
array_push($panier, ["qte" => 1, "nom" => "article1"]);
array_push($panier, ["qte" => 10, "nom" => "article25"]);
array_push($panier, ["qte" => 2, "nom" => "article99"]);
var_dump($panier);
// si l acheteur veut supprimer une reference
// 2 possibilités :
// unset () suuprime un elemnt d un tableau ou
// array_splice
unset($panier[0]); // supprimer l element qui a l indx 0 dans le tableau panier
var_dump($panier);
// $unset ($panier): on supprime tout le tableau  et on supprime la variable de la memoire
// de php 

echo "<hr>";
// si on trouve dans la focntion [] et null, php les met par defaut
$array_splice($panier, 1); // supprimer l element qui a la position 1; le dernier 
var_dump($panier);