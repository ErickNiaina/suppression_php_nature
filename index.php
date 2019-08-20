<html>
    <head>
        
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body id="vert">
        <div id="container">
            <?php
            if (isset($_GET['erreur'])) {
            ?>   
               <center id="erreur"><?php  echo $_GET['erreur']; ?></center>
            <?php   
             } 
            ?>
            <form action="log.php" method="post">
                
                <b>Nom d'utilisateur</b>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" >

                <b>Mot de passe</b>
                <input type="password" placeholder="Entrer le mot de passe" name="password" >

                <input type="submit" id='submit' value='LOGIN' >

            </form>
        </div>
    </body>
</html>