<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projet";
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
    $sql = "SELECT * FROM livre WHERE statut=\"disponible\" ";
    foreach ($conn->query($sql) as $row) {
        print $row['Isbn'] . "\t";
        $id=$row['Isbn'];
        print $row['Titre'] . "\t";
        print $row['Auteur'] . "\n";
        print $row['Editeur'] . "\n";
        print $row['Annee'] . "\n";  echo "<br/>";
        $photo=$row['Photo'] . "\n";
        print '<img src="'.$photo.'" width="100px" heigth="75px" />'; echo "<br/>";
        echo("<form action ='emprunter.php' method = 'post'>
        <input name='isbn' value='$id' type='hidden'/>
        <input value='Emprunter' type='submit'/><br/>---------------------------------------------------------------------------------------------
    </form>");
    }

$conn= null;
?>