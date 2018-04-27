<?php
header('Location: '.'ProjetSited.php');
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projet";

$NumEt = $_POST['NumEt'];
$MotdePass = $_POST['MotdePass'];
$Nom = $_POST['Nom'];
$Prenom = $_POST['Prenom'];
$ddn = $_POST['ddn'];
$Adresse = $_POST['Adresse'];
$Email = $_POST['Email'];
$NumTel = $_POST['NumTel'];
$Photo = $_POST['Photo'];
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
$sql = "INSERT INTO `membre` (`numE`, `mot_passe`, `nom`, `prenom`, `adresse`, `ddn`, `telephone`, `email`, `photo`) VALUES ('$NumEt'
, '$MotdePass' ,'$Nom', '$Prenom', '$Adresse','$ddn', '$NumTel','$Email','$Photo');";
$conn->exec($sql);
$conn = null;
?>