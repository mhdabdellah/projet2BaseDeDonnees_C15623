<?php
//la connexion avec la base de données
include "cnexion.php";
//Récupération de données


$nom=$_POST['nom'];
$Prenom=$_POST['Prenom'];
$Famile=$_POST['Famile'];
$Travaille=$_POST['Travaille'];
$Ville=$_POST['Ville'];
$Duplome=$_POST['Duplome'];
$Age=$_POST['Age'];
$tel=$_POST['tel'];



//Insertion de données dans la projet

$sql= "insert into adrare values('null','$nom', '$Prenom','$Famile','$Travaille','$Ville','$Duplome','$Age','$tel')";
if(mysqli_query($con,$sql)){
header("refresh:2;url=ajouter utilisateur (3).html");
}
else {
echo "Erreur d'insertion ";	
}

	

?>  
