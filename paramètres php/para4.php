<?php
//Faire une page index.php. Tester sur cette page que tous 
//les paramètres de cette URL existent et les afficher: index.php?langage=PHP&serveur=LAMP
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
if (isset($_GET['langage']) AND isset($_GET['serveur'])) // On a le nom et le prénom
{
	echo 'le langage est en ' . $_GET['langage'] . ' et le serveur ' . $_GET['serveur'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner la date de début et de fin!!';
}
?>
</body>
</html>