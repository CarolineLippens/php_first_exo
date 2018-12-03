<?php

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
if (isset($_GET['age'])) // On a le nom et le prénom
{
	echo 'Tu as ' . $_GET['age'] . 'ans';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut mettre ton age!';
}
?>
</body>
</html>