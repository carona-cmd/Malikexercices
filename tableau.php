<?php 
// live6 Malik
// tableaux ; il faut creer une variable 
// ancienne methode pour creer des tableaux 
$tableau = array (1,2,3,4);
// nouvelle methode
$tableau2 = [1,2,3,4];
// position => index, chaque elemnt va etre positionné selon un numer:tableau indexé 
//           0,1,2,3
//echo $tableau2 ; // erreur : array to string conversion
// il faudra utlisier 
print_r($tableau2); // on met la var dedans ;
//ou 
var_dump($tableau2);
$saison = ["été", "automne", "hiver" , "printemps"];
var_dump($saison);

// je vais aller en vacances cet été 
$phrase = "je vais aller en vacances cet " .$saison[0];

// je veus recuperer le dernier elemnt de mon tabelau 
echo $saison [3]."<br>";
echo $saison[4];
echo $saison[4-1];// printemps 
echo count($saison);// permet de donner le nombre d elemnts dans le tableau: printemps 
echo $saison [count($saison)-1]; // fonction count on aurau la valeur printemps 
// afficher le dernier elemnt /valeur stockée dans la variable saison 
// echo fonctionne uniquement avec les ch de caractere chiffres booleen , on ne peut
// pas l utiliser pour les tableaux 

echo count($saisons);// retourne 4 elemnst dans le tableau 
echo "coucou";
echo 1;
echo false; 
$t= ["a","b"];
var_dump($t);//affiche tout le tableau 
echo $t[1];
var_dump($t[0]);// afficher une valeur dans le tabelau t