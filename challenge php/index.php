<?php 
$string='i feel like a superHero';
echo $string;
$array  = explode('', $string);
$widthNumber = 0;
$theMost ='';
foreach ($array as $value) {
    if($widthNumber<strlen($array){
        $widthNumber = strlen($array);
        $theMost = $array;
    }
}
echo $theMost;

?>