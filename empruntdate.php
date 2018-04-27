<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projet";
date_default_timezone_set('UTC');
$d=getdate();
$m = $d['mon'];
if($m<2) $m=13;
$m =$m-1;
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
    $sql = "SELECT * FROM `emprunt` e,`livre`l WHERE l.`Isbn`=e.`Isbn` AND MONTH(`date_emprunt`)=$m
    ORDER BY `date_emprunt` DESC ";
    echo"Liste des livres empruntés le mois dernier par ordre décroissant";
    foreach ($conn->query($sql) as $row) {
        print $row['Isbn'] . "\t";
        $id=$row['Isbn'];
        print $row['Titre'] . "\t";
        print $row['Auteur'] . "\n";
        print $row['Editeur'] . "\n";
        print $row['Annee'] . "\n";
        print $row['Photo'] . "\n";
        echo'<br/>';
    }

$conn= null;
?>