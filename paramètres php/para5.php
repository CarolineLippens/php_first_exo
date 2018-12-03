<?php
//Faire une page index.php. Tester sur cette page que tous 
//les paramètres de cette URL existent et les afficher: index.php?semaine=12
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
if (isset($_GET['semaine'])) // On a le nom et le prénom
{
	echo 'nombre de semaine: ' . $_GET['semaine'];
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner le nombre de semaine!!';
}
?>
</body>
</html>