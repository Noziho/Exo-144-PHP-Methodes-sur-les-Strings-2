<?php
//Exo 1
$texte = "Aujourd'hui il fait -1000 degrés";

echo addslashes($texte)."<br><br>";

//Exo 2
$texte2 = "ah ça oui !";
echo strtoupper($texte2)."<br>";
echo ucfirst($texte2)."<br>";
echo ucwords($texte2)."<br>";

$texte3 = "AH CA OUI !";
echo strtolower($texte3)."<br>";
echo lcfirst($texte3);

//Exo 3
$texte4 = "Ma super chaîne avec au moins beaucoup de les mots du oui du coi du comment du ok du bonjour
 du le soir du bonsoir";

echo  "<br><br>"."Ma chaîne de caractère contient " .str_word_count($texte4) ." mots";

//Exo 4
echo "<br><br>";
$texte5 = "Ah ça oui !";
$tabString = explode(' ', $texte5);
foreach ($tabString as $value) {
    echo $value ."<br>";
}


//Exo 5
$tab = ["ah", "ça", "oui"];
echo "<br><br>".implode(' ',$tab);

//Exo 6
$texte7 = "Le texte de mon choix est: Ah ça oui !";
echo strrev($texte7)."<br>";
echo str_shuffle($texte7)."<br><br>";

//Exo 7
$texte8 = "<strong>Hello, </strong> nous apprenons <span style='color: blue;'>PHP</span>";
echo $texte8 ."<br>";
echo strip_tags($texte8) ."<br><br>";

//Exo 8
$texte9 = "Ah ça oui !";
echo str_pad($texte9,500, '|',STR_PAD_LEFT). "<br><br>";

//Exo 9
$texte10 = "Ah ca oui";
$tabSplit = str_split($texte10);
foreach ($tabSplit as $value) {
    echo $value ."<br>";
}

//Exo 10
$texte11 = "Ah ca oui !";
echo str_replace('oui', 'World', $texte11)."<br><br>";

//Exo 11
$texte12 = "Ah ca test";
echo "La position de 'test' est en ".strpos($texte12, 'test'). " eme position"."<br><br>";

//Exo 12
function checkText ($searchText) {
    $texte13 = "Ah ca oui";
    $location = strpos($texte13, $searchText);
    if ($location !== strlen($texte13) - strlen($searchText)) {
        echo "La string commence bien par '$searchText'";
    }
    else {
        echo "La string ne commence pas par '$searchText'";
    }
}

checkText('Ah');

//Exo 13
echo "<br><br>";
function checkText2 ($searchText) {
    $texte14 = "Ah ça oui";
    $location = strpos($texte14, $searchText);
    if ($location === strlen($texte14) - strlen($searchText)) {
        echo "La string termine bien par '$searchText'";
    }
    else {
        echo "La string ne termine pas par '$searchText'";
    }
}

checkText2('oui');