<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projet";
$identifiant=$_SESSION['numE'];
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
    $sql = "SELECT DISTINCT l.`Isbn`,l.`Titre`,l.`Auteur`,l.`Editeur`,l.`Annee`,l.`Photo`
    FROM `livre` l,`emprunt` e,`membre` m
    WHERE l.`isbn`=e.`isbn` AND e.`numE`=$identifiant ";
    foreach ($conn->query($sql) as $row) {
        print $row['Isbn'] . "\t";
        $id=$row['Isbn'];
        print $row['Titre'] . "\t";
        print $row['Auteur'] . "\n";
        print $row['Editeur'] . "\n";
        print $row['Annee'] . "\n";
        $photo=$row['Photo'] . "\n"; echo "<br/>";
        print '<img src="'.$photo.'" width="100px" heigth="75px" />'; echo "<br/>";
        echo("<form action ='rendu.php' method = 'post'>
        <input name='isbn' value='$id' type='hidden'/>
        <input value='Rendre' type='submit'/> <br/>--------------------------------------------
    </form>");
    }

    echo"<a href='ProjetSite.php'>Retour à la page principale</a>";
$conn= null;
?>