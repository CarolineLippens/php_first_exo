<?php 
//Exercice 1
//Faire une fonction qui retourne true.
function A(){
    return true;
}
A();


//Exercice 2
//Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
function B($a){
    echo ($a."</br>");
}
B('coucou');

//Exercice 3
//Faire une fonction qui prend en paramètre deux chaines de caractères (prénom et nom de famille) et 
//qui retourne la concaténation de ces deux chaines.

function C($prenom,$nom){
    echo ("Ton prénom est $prenom et ton nom est $nom. </br>");
}
C('Caroline','Lippens');


//Exercice 4
//Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

//Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
//Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
//Les deux nombres sont identiques si les deux nombres sont égaux

function D($nb1,$nb2){
    if ($nb1>$nb2) {
        echo ("Le premier nombre est plus grand.</br>");
    } elseif ($nb1<$nb2){
        echo ("Le premier nombre est plus petit.</br>");
    }
    elseif ($nb1=$nb2){
        echo ("les 2 nombres sont identiques.</br>");
    }
}
D(4,6);

//Exercice 5
//Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui 
//retourne la concaténation de ces deux paramètres.

function E($nb3,$p1){
echo ($nb3." sales gamins te disent ".$p1."</br>");
}
E(12,'hè madmoiselle');

//Exercice 6
//Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit retourner une chaine de la forme : 
//    "Bonjour" + nom + prenom + ",tu as" + age + "ans".

function F($nom,$prenom,$age){
    echo ("bonjour ".$nom.$prenom." tu as ".$age." ans.</br>");
    }
    F('Lippens','Caroline',22);

//Exercice 7
//Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :

//Homme
//Femme
//La fonction doit renvoyer en fonction des paramètres :

//Vous êtes un homme et vous êtes majeur
//Vous êtes un homme et vous êtes mineur
//Vous êtes une femme et vous êtes majeur
//Vous êtes une femme et vous êtes mineur
//Gérer tous les cas.

function G($age,$genre){
    if ($age > 20 && $genre == 'homme') {
        echo "Vous êtes un homme et vous êtes majeur </br>";
    } elseif ($age < 20 && $genre == 'homme') {
        echo "Vous êtes un homme et vous êtes mineur </br>";
    }
     elseif ($age > 20 && $genre == 'femme') {
        echo "Vous êtes une femme et vous êtes majeur </br>";
    }
    
     elseif ($age < 20 && $genre == 'femme') {
        echo "Vous êtes une femme et vous êtes mineur </br>";
    }
}
    G(22,'femme');


//Exercice 8
//Faire une fonction qui prend en paramètre trois nombres et qui retourne la somme de ces nombres. 
//Tous les paramètres doivent avoir une valeur par défaut.
function H($nb4,$nb5,$nb6){
    $nb7=0+$nb4;
    $nb8=0+$nb5;
    $nb9=0+$nb6;
    $resultat=$nb7+$nb8+$nb9;
    echo ($resultat);
    }
    H(3,5,2);
?>