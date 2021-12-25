<?php
//recuperation de l'id
$id=$_GET['edit_id'];
//connection avec la base de donnees
include "cnexion.php";

//la stokage de la requét sql (selection de l'utilisateur qui son id egal a $_GET['edit_id']) dans la variable $sql
$sql= "select * from inchirri where id='$id' ";
// stocke de la resultat du fonction mysqli_query qui prendre deux paramaitre 
//1- la variable qui contien la connection avec la base de donnees 
//2- la variable qui contien la requete sql pour selection 
$resultat = mysqli_query($con,$sql);
//la stockage du resultat de la fonction mysqli_fetch_assoc qui prendre la paramaitre suuivant
//la variable qui contien la resultat du fonction mysqli_query  
$row=mysqli_fetch_assoc($resultat);

// test si l'input de tupe sabmit et son nom est btn-save dans la formulair de modification,est cliquée ou non
if(isset($_POST['btn-save']))
{ 
 // recuperation des information envoyée par la formulair et les stockée dans des variables
	$nom=$_POST['nom'];
    $Prenom=$_POST['Prenom'];
	$Famile=$_POST['Famile'];
	$Travaille=$_POST['Travaille'];
	$Ville=$_POST['Ville'];
	$Duplome=$_POST['Duplome'];
	$Age=$_POST['Age'];
	$tel=$_POST['tel'];
// stocker une requéte sql pou la modification dans une variable 
	$sql= "update  inchirri set nom='$nom ',prenom='$Prenom',famile='$Famile',travaille='$Travaille',ville='$Ville',duplome='$Duplome',age='$Age', tel ='$tel' where id='$id' ";
// stocke de la resultat du fonction mysqli_query qui prendre deux paramaitre 
//1- la variable qui contien la connection avec la base de donnees 
//2- la variable qui contien la requete sql pour la modufication  
	$resultat = mysqli_query($con,$sql);
// test si la modification est validée ( marche normal ou  $resultat==true)
	if($resultat)
	{
		header("Location: list_des_utilusateur.php");
	}
//si la modufication n'est pas valide ($resultat==false)
	else
	{
		echo "Erreur";
		
	}
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
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
    <title>MODIFICATION DE PERSONE</title>
</head>
<body class="container" background="+254 775 269334 20210305_215610.jpg">
<div><B><I><h1>MODIFICATION DE PERSONE DU INCHIRRI</h1></I></B></div><br><br><br>

<div class="container">
        <form method="POST"  >
            <div class="form-group">
			<div class="form-group">
                <label for="nom" class="btn btn-outline-success">Nom</label>
                <input type="" id="name" name="nom" class="form-control form-control-sm" value ="<?php echo $row['nom']; ?>" oninput="checkName()"><br>
                <span id="nameErrMsg" class="error"></span>
            <br><br>
			<label for="nom" class="btn btn-outline-success">Prenom</label>
                <input type="" id="name" name="Prenom" class="form-control form-control-sm" value ="<?php echo $row['prenom']; ?>" oninput="checkName()"><br>
                <span id="nameErrMsg" class="error"></span>
            <br><br>
			<label for="nom" class="btn btn-outline-success">Nom De La Famile</label>
                <input type="" id="name" name="Famile" class="form-control form-control-sm" value ="<?php echo $row['famile']; ?>" oninput="checkName()"><br>
                <span id="nameErrMsg" class="error"></span>
            <br><br>
			<label for="nom" class="btn btn-outline-success">Travaille</label>
                <input type="" id="name" name="Travaille" class="form-control form-control-sm" value ="<?php echo $row['travaille'];?>" oninput="checkName()"><br>
                <span id="nameErrMsg" class="error"></span>
            <br><br>
			<label for="nom" class="btn btn-outline-success">Ville</label>
                <input type="" id="name" name="Ville" class="form-control form-control-sm" value ="<?php echo $row['ville']; ?>" oninput="checkName()"><br>
                <span id="nameErrMsg" class="error"></span>
            <br><br>
			<label for="nom" class="btn btn-outline-success">Duplome</label>
                <input type="" id="name" name="Duplome" class="form-control form-control-sm" value ="<?php echo $row['duplome']; ?>"  oninput="checkName()"><br>
                <span id="nameErrMsg" class="error"></span>
            <br><br>
			<label for="nom" class="btn btn-outline-success">Age</label>
                <input type="" id="name" name="Age" class="form-control form-control-sm" value ="<?php echo $row['age']; ?>"  oninput="checkName()"><br>
                <span id="nameErrMsg" class="error"></span>
            <br><br>
           
                <label for="tel" class="btn btn-outline-success">Numéro De Téléphone</label>
                <input type="" id="tel" name="tel" class="form-control" value ="<?php echo $row['tel']; ?>"   oninput="checkTel()"> 
                <span id="errortel" class="error"></span>
            <br><br>
			<input type="submit" class="btn btn-primary mb-2" id="validate" name="btn-save" onclick="validateForm(),checkTel(),checkName()" value="btn-save">
			<input type="reset" class="btn btn-primary mb-2" id="annul" value="ANNULER">
			<br>
               
    </div>
	</form>
   
    </div>
    <script>

function checkName() {
    var x = document.myForm;
    var input = x.name.value;
    var errMsgHolder = document.getElementById('nameErrMsg');
    if (input.length < 2) {
        errMsgHolder.innerHTML =
            'veillez entrer un nom de lettres superieur a 2';
        return false;
    } else if (!(/^\S{3,}$/.test(input))) {
        errMsgHolder.innerHTML =
            'le nom ne peut pas contenir des espaces';
        return false;
    }else if(!(/^[a-zA-Z]+$/.test(input)))
    {
        errMsgHolder.innerHTML=
                'seulement les alphabetes autoriser'
    }
    else if(!(/^(?:(\w)(?!\1\1))+$/.test(input)))
    {
        errMsgHolder.innerHTML=
                'per 3 alphabets allowed'
    }
    else {
        errMsgHolder.innerHTML = '';
        return undefined;
    }}
    function checkTel(){
        var tel=document.getElementById('tel').value;
        errortel=document.getElementById('errortel');
        if(tel.length<8 || tel.length>8){
        errortel.innerHTML='veillez entrer un numero exactement de nombre des chiffres egal a 8'
        return false;
        
        }
    else if (!(/^[0-9]/).test(tel)){
        errortel.innerHTML='saisir des chiffres';
    }
    else{
        tel.style.color="green";
    }
    }
    //$("#validate").on("click", checkTel);
 



      </script>
</body>
</html>