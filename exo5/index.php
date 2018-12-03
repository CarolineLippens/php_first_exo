<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class='first_block'>
<?php
//adresse_ip
function get_ip() {
	// IP si internet partagé
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
		
	}
	// IP derrière un proxy
	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Sinon : IP normale
	else {
		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
	}
}
echo 'Adresse IP du visiteur : '.get_ip();
echo '</br>';
echo ($_SERVER['HTTP_USER_AGENT']);
echo '</br>';
echo ($_SERVER['SERVER_NAME']);
echo '</br>';
setcookie("mot_de_passe",($_POST['mdp']),time()+5000);
/*name is your cookie's name
value is cookie's value
$int is time of cookie expires*/

setcookie("logincookie",($_POST['login']),time()+5000);
     ?>
	 
	 </div>
	 <form action="index2_2.php" method="post">
	 <div class="second_block">
	 <p>nom :</p>
    <input type="text" name="nom" />
        
    <p>prénom :</p>
    <input type="text" name="prenom" />
	<p>age :</p>
    <input type="text" name="age" />

	</div>

	 <div class='third_block'>
	 </br>
	 login :
    <input type="text" name="login" />
        
    mot de passe :
    <input type="text" name="mdp" />
	<input type="submit" value="Valider" />
	 </div>


</form>



</body>
</html>
