<?php
//Faire une page index.php. Tester sur cette page que tous 
//les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) // On a le nom et le prénom
{
	echo 'tu as commencé le ' . $_GET['dateDebut'] . ' et finit le ' . $_GET['dateFin'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner la date de début et de fin!!';
}
?>
</body>
</html>