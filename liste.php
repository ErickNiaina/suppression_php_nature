<!DOCTYPE html>
    <?php 
     include('tableau.php');
     include('table.php');
    ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Exam</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center>
    <table>
        <tr> 
            <th>N°</th>
            <th>PC</th>
            <th>Supprimer</th>
            <th>S'attribuer</th>
        </tr>

        <?php  
            for ($i=0; $i <count($tableau); $i++) {   
         ?>   
        <tr>
            <td><?php echo $tableau[$i]['id']; ?> </td>
            <td><?php echo $tableau[$i]['pc']; ?> </td>
            <td><a href="supprimer.php?sup=<?php echo $tableau[$i]['id']; ?>">supprimer</a></td> 
            <td><a href="attribution.php?attribuer=<?php echo $tableau[$i]['pc']; ?>">Info</a></td>
        </tr>
        <?php } ?> 
        <button><a href="index.php">Deconexion</a></button>
    </table>
    </center>
</body>
</html>