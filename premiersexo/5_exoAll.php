<?php 
//Créer un tableau mois et l'initialiser avec les valeurs suivantes :
//
//janvier
//février
//mars
//avril
//mai
//juin
//juillet
//aout
//septembre
//octobre
//novembre
//décembre
$array1 = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
var_dump($array1);

//Exercice 2
//Avec le tableau de l'exercice 1,
//
//afficher la valeur de la troisième ligne de ce tableau.
//afficher la valeur de l'index 5.
//modifier le mois de aout pour lui ajouter l'accent manquant.
$array1 = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
$array1[7]='août';
var_dump($array1);
var_dump($array1[2]);
var_dump($array1[4]);

//Exercice 3
//Voici la liste des départements de la région Auvergne-Rhône-Alpes 
//: Ain (01), Allier (03), Ardèche (07), Cantal (15), Drôme (26), Isère (38), Loire (42), Haute-Loire (43), 
//Puy-de-Dôme (63), Rhône (69), Savoie (73), Haute-Savoie (74)
//
//Créer un tableau associatif avec comme index le numéro des départements et en valeur leur nom.
//Afficher la valeur de l'index 69.
//Ajouter la ligne correspondant au département de la ville de Metz.
//Afficher toutes les valeurs ainsi que les clés associées grâce à une boucle sous la forme : 
//    "Le département" + nom_departement + "a le numéro" + num_departement

$array2=array(
    01 => "Ain",
    03 => "Allier",
    15 => "Cantal",
    26 => "Drôme",
    38 => "Isère",
    42 => "Loire",
    43 => "Haute-Loire",
    63 => "Puy-de-Dôme",
    69 => "Rhône",
    73 => "Savoie",
    74 => "Haute-Savoie",
);
$array2[57]="Metz";
var_dump($array2);
var_dump($array2[69]);
foreach ($array2 as $key => $value){
    echo("le département ".$value." a le numéro ".$key."</br>");
}


//Exercice 4 - Les feux de l'amour
//Camille se marie et doit envoyer des mails à ses amis.
//
//En utilisant ce tableau, faites en sorte que chaque personne de cette liste reçoit le même mail en faisant en sorte qu'il 
//soit personnalisé.
//
//array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");

//Mail : "Salut prénom, devine quoi ! Je me marie dans samedi dans deux semaines ! 
//J'espère te compter parmi les invités ! Gros bisous :)"

$invits=array(
    1 => "Alex",
    2 => "Max",
    3 => "Dominique",
    4 => "Claude",
    5 => "Leslie",
    6 => "Charlie",
    7 => "Lou",
);
foreach ($invits as $key => $value){
    echo("Salut ".$value.", devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous chouque jpep big love xoxo smack kiss kiss :) </br>");
}
?>
