<?php
$fruits = ["pomme", "poire", "abricot", "fraise"];
array_splice($fruits, 1, 2); // supprime tout a partir de 1
var_dump($fruits);
// ["pommme","fraise"];
// comme si j ai fait unset fruit [1] et unset fruit[2]
$t = [1, 2];
array_splice($t, 1, 0, "a");
var_dump($t); // insere a entre les 2 index 
echo "<br";

$arbres = ["chaine", "sapin", "boulot", "hetre"];
// supprimer dernier element du tableau
//array_splice($arbres,3);
//ou
// array_splice($arbres , count($arbre)-1)
// ou
array_pop($arbres); // supprime dernier element du tableau
var_dump($arbres) . "<br>";

// supprimer le premier element
array_shift($arbres) . "<br>"; // sapin boulot


$budget = [10, 20, 100];
$total = 0;
for ($i = 0; $i < count($budget); $i++) {
    $total += $budget[$i];
}
echo $total . "<br>";
echo array_sum($budget) . "<br>";
// pour verifier si une valeur est presente dans un tableau
//est ce que dans ma liste de courses j ai la valeur fraise 
$courses = ["pomme", "poire", "abricot", "fraise"];
$estCeQueValeurExiste = in_array("abricot", $courses); // par default false 
echo "$estCeQueValeurExiste"; // retourne rien ou 1 
var_dump($estCeQueValeurExiste); // echo ne retourne rien si c est vrai mais il faut faire 
// vardump pour voir

$tableau = ["fille", "garcon", "parent", "autres"]; // recuperer premier element du tableau
echo $tableau[0];
echo current($tableau); // fille 
echo end($tableau); // dernier element ; autres 


// je cherche siun index existe 
$liste = [
    "toto" => "alain",
    "tata" => "Doe",
    "adresse " => "75 rue de paradis"
];
var_dump(array_key_exists("telephone", $liste)); // false

$t1 = [1, 2];
for ($i = 0; $i < count($t); $i++) {
    //$t[$i] = $t[$t] . "coucou";
    $t[$i] .= "coucou";
}
var_dump($t);