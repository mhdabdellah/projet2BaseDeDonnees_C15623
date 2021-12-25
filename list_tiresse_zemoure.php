<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.rtl.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.rtl.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
    <title>LISTE DE TIRESSE ZEMOURE </title>
</head>
<body>
<?php
    include "cnexion.php";
?>
    <div class="block">
        <h1><B><i>LISTE DE TIRESSE ZEMOURE</i></B></h1>
        <table class="table table-hover btn-success btn-primary mb-6">
            <thead>
                <th scope="col">Numéro identifiant</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
				<th scope="col">Famille</th>
				<th scope="col">Travaille</th>
                <th scope="col">Ville</th>
				<th scope="col">Duplome</th>
				<th scope="col">Age</th>
				<th scope="col">Téléphone</th>
				<th scope="col" colspan=2>Actions</th>
            </thead>
            <tbody>    
<?php // parcourir les rangs
  $sql= "select * from tiresse_zemoure ";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($row=mysqli_fetch_assoc($resultat)){
?>
                <tr>
                    <td scope="row"><?php echo $row['id'];?></td>
                    <td scope="row"><?php echo $row['nom']; ?></td>
                    <td scope="row"><?php echo $row['prenom']; ?></td>
                    <td scope="row"><?php echo $row['famile']; ?></td>
					<td scope="row"><?php echo $row['travaille'];?></td>
                    <td scope="row"><?php echo $row['ville']; ?></td>
                    <td scope="row"><?php echo $row['duplome']; ?></td>
                    <td scope="row"><?php echo $row['age']; ?></td>
					<td scope="row"><?php echo $row['tel']; ?></td>
					<td align="center">
                       <a href="modifier_tiresse.php?edit_id=<?php print($row['id']); ?>" class="btn btn-primary mb-2 btn-success" onclick="return confirm('Êtes-vous sûr de vouloir modifier ce PERSONE  ?');">
				       <font color ="white">Modifier <?php echo "<img src='edit.jpg' width=10% height=10%>"; ?></font></a>
                     </td>
                    <td align="center">
                       <a href="supprimer_du_list_tiresse.php?delete_id=<?php print($row['id']); ?>" class="btn btn-primary mb-2 btn-success" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce PERSONE ?');">
				       <font color ="white">Supprimer <?php echo "<img src='del.jpg' width=10% height=10%>"; ?></font></a>
				
                    </td>
				 </tr>	
                    
<?php
}	
	
} else 
{
	echo "<tr>";
	echo "<td colspan='4'>";
echo  "Aucun enregistrement";
echo "</td>";
}

?>
            </tbody>
        </table>
    </div>
</body>
</html>