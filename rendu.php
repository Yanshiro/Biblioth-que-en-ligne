<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projet";
$isbn=$_POST['isbn'];
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
    $sql = "UPDATE `livre` SET `Statut`='disponible'
    WHERE `Isbn`=$isbn";
    $conn->exec($sql);
    $sql = "DELETE FROM `emprunt`
    WHERE `Isbn`=$isbn";
    $conn->exec($sql);
    echo "rendu avec succes";
    echo"<a href='ProjetSite.php'>Retour à la page principale</a>";

$conn= null;
?>