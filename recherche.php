<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projet";
$mot=$_POST['recherche'];
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
    $sql = "SELECT * FROM livre WHERE Isbn LIKE '%$mot%'
                                    OR  Titre LIKE '%$mot%' 
                                    OR Auteur LIKE '%$mot%' 
                                    OR Editeur LIKE '%$mot%'
                                     ";
    foreach ($conn->query($sql) as $row) {
        
        print $row['Isbn'] . "\t";
        print $row['Titre'] . "\t";
        print $row['Auteur'] . "\t";
        print $row['Editeur'] . "\t";
        print $row['Annee'] . "\t";
        print $row['Statut'] . "\t";
        $photo=$row['Photo'] . "\n";
        echo '<br/>';        
        print '<img src="'.$photo.'" width="100px" heigth="75px" />'; echo "<br/>
        <br/>---------------------------------------------------------------------------------------------
<br/>";
    }
    echo"<a href='ProjetSited.php'>Retour à la page principale</a>";
$conn= null;
?>