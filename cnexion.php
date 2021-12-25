<?php
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","","id18121773_projet");
if(!$con){die("Erreur de type" .mysqli_connect_error()); }
else "OK";
?>