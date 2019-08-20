<?php 
if (isset($_GET['sup'])) {
		include('table.php');
		for ($i=0; $i <count($tableau) ; $i++) { 
			if ($tableau[$i]['pc'] = $_GET['sup']) {
				unset($tableau[$i]);
				var_dump($tableau);
			}
		}
	}
?>