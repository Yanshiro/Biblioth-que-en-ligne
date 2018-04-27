<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projet";

$isbn = $_POST['isbn'];
$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$editeur = $_POST['editeur'];
$annee = $_POST['annee'];
$photo = $_POST['photo'];
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
try {
    $conn = new PDO("mysql:host=$servername;dbname=projet", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    }
$sql = "INSERT INTO `livre` (`Isbn`, `Titre`, `Auteur`, `Editeur`, `Annee`, `Photo`, `Statut`) VALUES ('$isbn'
, '$titre' ,'$auteur', '$editeur', '$annee','$photo', 'disponible');";
$conn->exec($sql);
echo"<a href='ProjetSite.php'>Retour à la page principale</a>";
$conn = null;
?>