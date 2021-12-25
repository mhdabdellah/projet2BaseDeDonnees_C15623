<?php 
$id=$_GET['delete_id'];
include "cnexion.php";
$sql= "delete  from adrare where id='$id' ";
$resultat = mysqli_query($con,$sql);

	
	if($resultat)
	{
		header("Location: list_adrare.php");
	}
	else
	{
		echo "Erreur";
	}

	?>