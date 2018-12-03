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
    //exo1
    //Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 23/06/2017)
    echo date("j/n/Y")."</br>";
    //exo2
    //Afficher la date courante en respectant la forme jj-mm-aa (ex : 23-06-17)
    echo date("j/n/y")."</br>";
    //exo3
    //Afficher la date courante avec le jour de la semaine 
    //et le mois en toutes lettres (ex : mardi 2 août 2016)
    echo date('l j F Y ')."</br>";
    //exo4
    //Afficher le timestamp du jour. Afficher le timestamp du mardi 2 août 2016 à 15h00.
    $timeS = new DateTime('2016-08-02 15:00:00');
    echo 'timestamp:'.($timeS->getTimestamp()).'<br>';
    //exo5
    //Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
    $date1 = "16-05-2016";
    $date2 = date("d-m-Y");
    $diff = ((strtotime($date2)) - strtotime($date1));
    $diff = round($diff / (60*60*24));
    echo $diff."<br>";
    //exo 6
    //Afficher le nombre de jour dans le mois de février de l'année 2017.
    $number=cal_days_in_month ( CAL_GREGORIAN ,2 , 2017 );
    echo ($number."</br>");
    //exo7
    //Afficher la date du jour + 20 jours.
    echo 'Dans 20 jours : '. date('d-m-Y', strtotime('+20 days')) ."</br>";
    //Exercice 8
    //Afficher la date du jour - 22 jours
    echo 'Il y a 20 jours : '. date('d-m-Y', strtotime('-20 days')) ."</br>";
    ?>

    <p>
<select name="month">
  <option value="">Select...</option>
  <option value="JANVIER">Janvier</option>
  <option value="FEVRIER">Fevrier</option>
  <option value="MARS">Mars</option>
  <option value="AVRIL">Avril</option>
  <option value="MAI">Mai</option>
  <option value="JUIN">Juin</option>
  <option value="JUILLET">Juillet</option>
  <option value="AOUT">Aout</option>
  <option value="SEPTEMBRE">Septembre</option>
  <option value="OCTOBRE">Octobre</option>
  <option value="NOVEMBRE">Novembre</option>
  <option value="DECEMBRE">Decembre</option>
</select>
</p>
<select name="birth_year">
        <?php 
          $year = date('Y');
          $min = $year - 120;
          $max = $year;
          for( $i=$max; $i>=$min; $i-- ) {
            echo '<option value='.$i.'>'.$i.'</option>';
          }
        ?>




        



        
      </select>

      <?php
$lien_redir="date_info.php";//Lien de redirection apres un clic sur une date, NB la date selectionner va etre ajouter à ce lien afin de la récuperer ultérieurement 
$clic=1;//1==>Activer les clic sur tous les dates; 2==>Activer les clic uniquement sur les dates speciaux; 3==>Désactiver les clics sur tous les dates
$mois_fr = Array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août","Septembre", "Octobre", "Novembre", "Décembre");

if(isset($_GET['mois']) && isset($_GET['annee']))
{
	$mois=$_GET['mois'];
	$annee=$_GET['annee'];
}
else
{
	$mois=date("n");
	$annee=date("Y");
}

$l_day=date("t",mktime(0,0,0,$mois,1,$annee));
$x=date("N", mktime(0, 0, 0, $mois,1 , $annee));
$y=date("N", mktime(0, 0, 0, $mois,$l_day , $annee));
$titre=$mois_fr[$mois]." : ".$annee;
//echo $l_day;
?>


<form name="dt" method="get" action="">
<select name="mois" id="mois" onChange="change()" class="liste">
<?php
	for($i=1;$i<13;$i++)
	{
		echo '<option value="'.$i.'"';
		if($i==$mois)
			echo ' selected ';
		echo '>'.$mois_fr[$i].'</option>';
	}
?>
</select>
<select name="annee" id="annee" onChange="change()" class="liste">
<?php
	for($i=1950;$i<2035;$i++)
	{
		echo '<option value="'.$i.'"';
		if($i==$annee)
			echo ' selected ';
		echo '>'.$i.'</option>';
	}
?>
</select>
</form>
<table class="tableau"><caption><?php echo $titre ;?></caption>
<tr><th>Lun</th><th>Mar</th><th>Mer</th><th>Jeu</th><th>Ven</th><th>Sam</th><th>Dim</th></tr>
<tr>
<?php
//echo $y;
$case=0;
if($x>1)
	for($i=1;$i<$x;$i++)
	{
		echo '<td class="desactive">&nbsp;</td>';
		$case++;
	}
for($i=1;$i<($l_day+1);$i++)
{
	$f=$y=date("N", mktime(0, 0, 0, $mois,$i , $annee));
	$da=$annee."-".$mois."-".$i;
	$lien=$lien_redir;
	$lien.="?dt=".$da;
	echo "<td";
	echo" onmouseout='over(this,0,1)'>$i</td>";
	$case++;
	if($case%7==0)
		echo "</tr><tr>";	
}
?>
</tr>
</table>
<script type="text/javascript">
function change()
{
	document.dt.submit();
}

</script>
</body>
</html>