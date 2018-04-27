<!DOCTYPE html>
<html>
<body>

	<meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles.css">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="script.js"></script>

	<div id='cssmenu'>
		<ul>
			<li><a href="index.php" class="active">Accueil</a></li>
			<li><a href="moyenne.php">Moyenne</a></li>
			<li><a href="rattrapages.php">Rattrapages</a></li>
			<li><a href="saisieNoteEtu.php">Saisir des notes</a></li>
			<li><a href="statistiquesEtu.php">Statistiques d'un etudiant</a></li>
			<li><a href="afficherEtudiant.php">Liste des étudiants</a></li>
			<li><a href="export.php">Export</a></li>
			<li><a href="classement.php">Classement</a></li>
			<li class='has-sub'><a href="#">Importer</a>
				<ul>
					<li> <a href="importFichierNotes.php">Notes</a></li>
					<li> <a href="importFichierEtudiants.php">Étudiant</a></li>
				</ul>
			</li>
			<li class='has-sub'><a href="#">Creer</a>
				<ul>
					<li><a href="formEtudiant.php">Profil d'étudiant</a></li>
					<li><a href="formSem.php">Semestre</a></li>
					<li><a href="formUE.php">UE</a></li>
					<li><a href="formEC.php">EC</a></li>
					
				</ul>
			</li>
		</ul>
	</div>

</body>
</html>
