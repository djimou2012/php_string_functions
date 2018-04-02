<!DOCTYPE html>
<html>
<body>

<?php
$chaine = "Bienvenue sur notre page d'accueil";
echo $chaine. "<br />";

echo strlen($chaine). "<br />"; //renvoie 33 

$chaine = trim($chaine);
echo $chaine. "<br />";

$sur = "sur";
echo strpos($chaine,$sur) . "<br />"; //retourne la position :5 
echo strstr($chaine,$sur) . "<br />";

?>

</body>
</html>