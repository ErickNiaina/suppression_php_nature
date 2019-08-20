<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
	<center>
<?php 
	include('tableau.php');
 ?>
 <table>	
<?php 
	if (isset($_POST['username']) && isset($_POST['password']) && login($_POST['username'],$_POST['password']) == true) {	
	 $a = login($_POST['username'],$_POST['password']);
	 	for ($i=0; $i <count($a) ; $i++) { 
?>
	<tr>
		<th>NOM</th>
		<th>INFO</th>
		<th>PC</th>
	</tr>
	<tr>
		<td><?php echo $a[$i]['nom'].'<br>'; ?></td>
		<td>
			<?php echo 'Mail:'.$a[$i]['email'].'<br>'; ?>
			<?php echo 'Mdp:'.$a[$i]['mdp'].'<br>'; ?>
			<?php echo 'Post:'.$a[$i]['job'].'<br>'; ?>
			<?php echo 'S/N:'.$a[$i]['serie'].'<br>'; ?>
		</td>
		<td><?php echo $a[$i]['pc'].'<br>'; ?></td> 				
	</tr>
	<button><a href="liste.php">Accueil</a></button>
	<button><a href="index.php">Deconexion</a></button>
<?php 
 	}
	}
	else{//if (empty($_POST['username']) && empty($_POST['password']) ) {
		header('location:index.php?erreur=!ERREUR DE EMAIL OU MOT DE PASSE');
	}	

?>
    </center>
	</table>
</body>
</html>
