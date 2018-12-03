<?php
//C'est les soldes. Un t-shirt qui te plaît coûte 785€ à la base mais ce mois-ci,
//ton magasin préféré lui applique une ristourne de 30%. Grâce à tes nouvelles connaissances en PHP, 
//affiche le prix de départ, le montant de la ristourne et le prix que tu vas payer sur ton navigateur.
$a=785;
$b=785/100*30;
$c=$a-$b;
echo($a."</br>".$b."</br>".$c)
?>
