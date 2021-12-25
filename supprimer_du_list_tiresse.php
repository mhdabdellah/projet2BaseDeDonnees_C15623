<?php 
$id=$_GET['delete_id'];
include "cnexion.php";
$sql= "delete  from tiresse_zemoure where id='$id' ";
$resultat = mysqli_query($con,$sql);

	
	if($resultat)
	{
		header("Location: list_tiresse_zemoure.php");
	}
	else
	{
		echo "Erreur";
	}

	?>