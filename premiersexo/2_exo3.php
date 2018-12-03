<?php
//Créer deux variables age et genre. La variable genre peut prendre comme valeur :
//
//Homme
//Femme
//En fonction de l'âge et du genre, afficher la phrase correspondante :
//
//Vous êtes un homme et vous êtes majeur
//Vous êtes un homme et vous êtes mineur
//Vous êtes une femme et vous êtes majeur
//Vous êtes une femme et vous êtes mineur
//Gérer tous les cas.
$age=22;
$genre="femme";
if ($age > 20 && $genre == "homme") {
    echo "Vous êtes un homme et vous êtes majeur";
} elseif ($age < 20 && $genre == "homme") {
    echo "Vous êtes un homme et vous êtes mineur";
}
 elseif ($age > 20 && $genre == "femme") {
    echo "Vous êtes une femme et vous êtes majeur";
}

 elseif ($age < 20 && $genre == "femme") {
    echo "Vous êtes une femme et vous êtes mineur";
}
?>