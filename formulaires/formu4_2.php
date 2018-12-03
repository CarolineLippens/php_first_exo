<?php 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($imageFileType != "pdf") {
    echo "Désolé, votre fichier n'est pas un pdf...";
    $uploadOk = 0;
}
else{
    echo 'Votre fichier à bien été upload!';
}

?>
