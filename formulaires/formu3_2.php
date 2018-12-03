
<?php
//Exercice 2
//Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.
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
<p>Bonjour !</p>

<p><?php echo $_POST['civilité']; ?>, votre nom est <?php echo $_POST['nom']; ?> et votre prénom <?php echo $_POST['prenom']; ?>!</p>

<p>Si tu veux changer de prénom, <a href="formu3.php">clique ici</a> pour revenir à la page formulaire.php.</p>
</body>
</html>