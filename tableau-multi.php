<?php
$page = [
    "titre " => "article numero1",
    "contenu" => "lorem ipsum",
    "auteur" => [
        "prenom" => "victor",
        "nom" => "hugo"
    ],
    "categorie" => ["PHP", "HTML", "CSS"],
    "sommaire" => [
        ["lorem ipsum1", "conclusion"],
        ["lorem ipsum2", "conclusion2"],
    ]

];
// 11 valeurs differntes 
// index = valeur 
// je veux recuperer le nom de l auteur
echo $page["auteur"]["nom"];
echo $page["categories"][2] . "<br>"; // css 
echo $page["categories"][count($page["categories"]) - 1] . "<br>";
echo $page["sommaire"][1][2] . "<br>";// conclusion2


