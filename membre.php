<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "monSite";

$Prenom = $_POST['Prenom'];
$Nom = $_POST['Nom'];
$Sexe = $_POST['Sexe'];
$Annee = $_POST['Annee'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `membre` (`Id`, `Prenom`, `nom`, `sexe`, `Annee-naissance`, `Photo`) VALUES (NULL, '$Prenom' ,'$Nom', '$Sexe', '$Annee', NULL);";

if ($conn->query($sql) === TRUE) {
    echo "Nouvelle enregistrement";
} else {
    echo "Error: " . $sql . '<br>' . $conn->error;
}

/*$sql = "SELECT `Nom`, `Prenom` FROM `membre`";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo "Nom: " . $row["Nom"]. " " . $row["Prenom"]. "<br>";}*/
$conn->close();
?>