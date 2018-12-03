<?php
//Exercice 1
//Créer une variable et l'initialiser à 0. Tant que cette variable n'atteint pas 10, il faut :
//
//l'afficher
//l'incrementer
$a=1;
while ($a<= 10) {
    echo ($a);
    $a++;

}
//Exercice 2
//Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100. 
//Tant que la première variable n'est pas supérieur à 20 :
//
//multiplier la première variable avec la deuxième
//afficher le résultat
//incrementer la première variable
$b=0;
$c=6;
while ($b<= 20) {
    echo ($b*$c."</br>");
    $b++;
}
//Exercice 3
//Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100. 
//Tant que la première variable n'est pas inférieure ou égale à 10 :
//
//multiplier la première variable avec la deuxième
//afficher le résultat
//décrémenter la première variable
$d=100;
$e=42;
while ($d>10) {
    echo ($d*$e."</br>");
    $d--;
}

//Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10, il faut :
//
//l'afficher
//l'incrementer de la moitié de sa valeur
$f=1;
while ($f<10) {
    echo ($f."</br>");
    $f+=$f/2;
}

//Exercice 5
//En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. Combien de fois le message s'affiche-il ?

$g=1;
while ($g<=15) {
    echo ("on y est presque.</br>");
    $g++;
}

//Exercice 6
//En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. Combien de fois le message s'affiche-il ?
$h=20;
while ($h>0) {
    echo ("c'est presque bon.</br>");
    $h=$h-1;
}

//Exercice 7
//En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. Combien de fois le message s'affiche-il ?
$i=1;
while ($i<100) {
    echo ("on tient le bout.</br>");
    $i=$i+15;
}

//Exercice 8
//En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. Combien de fois le message s'affiche-il ?
$j=200;
while ($j>0) {
    echo ("Enfin!!!!.</br>");
    $j=$j-12;
}
?>