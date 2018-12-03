<?php
//Faire une page index.php. Tester sur cette page que 
//tous les paramètres de cette URL existent et les afficher: index.php?batiment=12&salle=101
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
if (isset($_GET['batiment']) AND isset($_GET['salle'])) // On a le nom et le prénom
{
	echo 'tu as cours batiment ' . $_GET['batiment'] . ', dans la salle ' . $_GET['salle'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner la date de début et de fin!!';
}
?>
</body>
</html>