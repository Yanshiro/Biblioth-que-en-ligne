
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projet";
session_start();
$isbn = $_POST["isbn"];
$numE=$_SESSION['numE'];
date_default_timezone_set('UTC');
$dateemprunt=date("d.m.y");
$dateretour = strtotime($dateemprunt);
$dateretour = strtotime("+3 week", $dateretour);
$dateretour=date('d/m/y', $dateretour);
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
$sql = "INSERT INTO `emprunt` (`Isbn`, `numE`, `date_emprunt`, `date_retour`) VALUES ('$isbn'
, '$numE' ,'$dateemprunt', '$dateretour');";
$conn->exec($sql);
$sql2 = "UPDATE `livre` 
        SET `Statut`='Non disponible'
        WHERE `Isbn`=$isbn;";
$conn->exec($sql2);
echo"emprunt effectuer avec succès";
echo"<a href='ProjetSite.php'>Retour à la page principale</a>";
$conn = null;
?>