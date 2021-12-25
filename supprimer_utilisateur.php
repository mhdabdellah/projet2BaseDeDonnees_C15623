
<?php 
$id=$_GET['delete_id'];
include "cnexion.php";
$sql= "delete  from inchirri where id='$id' ";
$resultat = mysqli_query($con,$sql);

	
	if($resultat)
	{
		header("Location: list_des_utilusateur.php");
	}
	else
	{
		echo "Erreur";
	}

	?>