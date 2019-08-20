<?php 

function login($adresse,$pass){
	include('table.php');
	$res = array();
for ($i=0; $i <count($tableau) ; $i++) { 
	if (($tableau[$i]['email'] == $adresse) && ($tableau[$i]['mdp'] == $pass)) {
		array_push($res, $tableau[$i]);
	}
}
	return $res;
	
 }
//fonction pour supprimer
function supprimer($id){
		include('table.php');
	for ($i=0; $i <count($tableau) ; $i++) { 
			if (($tableau[$i]['id'] == $id)) {
				unset($tableau[$i]);
			} 
		}
		return $tableau;
	}
//fonction pour s'attribuer
function attribution($pc){
	include('table.php');
	$res = array();
for ($i=0; $i <count($tableau) ; $i++) { 
	if (($tableau[$i]['pc'] == $pc)) {
		array_push($res, $tableau[$i]);
	}	
}
	return $res;
	
 }
   
?>
