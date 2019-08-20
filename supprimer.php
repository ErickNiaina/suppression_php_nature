

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
			<tr>
				<th>N°</th>
				<th>Nom</th>
				<th>S/N</th>
				<th>PC</th>
				<th>Email</th>
				<th>Mdp</th>
				<th>Post</th>
			</tr>

		<?php 	
		if (isset($_GET['sup'])) {	
				$a = supprimer($_GET['sup']);
		 	for ($i=0; $i <count($a) ; $i++) { 
		?>
		 	<tr>
		 		<?php if(isset($a[$i])) { ?>
		 		<td><?php echo $a[$i]['id'].'<br>';?></td>
				<td><?php echo $a[$i]['nom'].'<br>';?></td>
				<td><?php echo $a[$i]['serie'].'<br>';?></td>
				<td><?php echo $a[$i]['pc'].'<br>';?></td>
				<td><?php echo $a[$i]['email'].'<br>';?></td>
				<td><?php echo $a[$i]['mdp'].'<br>';?></td>
				<td><?php echo $a[$i]['job'].'<br>';?></td>	
				<?php } ?>	
		 	</tr> 
		<?php
		 	}
			}
		 ?>
		  <button><a href="liste.php">Accueil</a></button>
		  <button><a href="index.php">Deconexion</a></button>
		</table>
	 </center>
</body>
</html>
