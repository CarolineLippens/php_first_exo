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
setcookie("mot_de_passe",($_POST['mdp']),time()+500);
setcookie("logincookie",($_POST['login']),time()+500);
echo 'votre nom d utilisateur est '.$_COOKIE["logincookie"].'</br>';
echo 'Votre mot de passe est '.$_COOKIE["mot_de_passe"];

?>

	 <form action="index2_2.php" method="post">


	 <div class='third_block'>
	 </br>
	 login :
    <input type="text" name="login" />
        
    mot de passe :
    <input type="text" name="mdp" />
	<input type="submit" value="Valider" />



</form>
<p>Nous avons bien reçu votre formulaire, votre nom est <?php echo $_POST['nom']?> et votre prénom <?php echo $_POST['prenom']?>.
Vous avez <?php echo $_POST['age']?> ans.

 </p>
 

<p>si ces informations ne sont pas correct, <a href="index2.php">clique ici</a> pour revenir à la page précédente.</p>

</body>
</html>