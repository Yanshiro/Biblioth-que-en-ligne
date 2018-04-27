<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<!-- entête du document -->
<head>
    <meta charset="UTF-8"/> 
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>

<body class="img_fond" >
<?php
session_start();
$prenom=$_SESSION["prenom"];
?>

<br> 
<nav class="navbar navbar-light bg-light">

    <div class="container" >
        <div id="Haut">
		
            <a class="navbar-brand" href="Home.html">
				
					<img class="logo" class="position-absolute" src="skurt.png" alt="" width="75" height="100" align="absmiddle" style="margin-left:50px">
					<div class="nom_biblio" class="position-absolute" width="13px">
					Bibiothèque ka hale hana 
					</div>
             </a>
        </div>
       
	   <div class="navbar-collapse collapse">
       
	   <ul class=" navbar-nav barnav navbar-right">
            
            <li>
                <a class="onglet arrondi" href="rechercher.html">Recherche livre</a>
            </li>
			<li>
                <a class="onglet arrondi" href="dispo.php">Livres disponibles</a>
            </li>
			
			<li>
                <a class="onglet arrondi" href="Ajoutlivre.html">Ajouter livre</a>
            </li>
			
			<li>
                <a class="onglet arrondi" href="rendre.php">Rendre un livre </a>
            </li>
			
			<li>
                <a class="onglet arrondi" href="projetSited.php">Deconnexion</a>
            </li>
            <li>
                <?php echo"<span style='color:white'>Bonjour $prenom</span>"; ?>
            </li>
        </ul>
        </div>
    </div> 
</nav>




</body>
</html>

	