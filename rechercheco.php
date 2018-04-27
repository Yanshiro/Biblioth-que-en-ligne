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
        $id=$row['Isbn'];
        print $row['Titre'] . "\t";
        print $row['Auteur'] . "\t";
        print $row['Editeur'] . "\t";
        print $row['Annee'] . "\t";
        $photo=$row['Photo'] . "\n";
        print $row['Statut'] . "\t";echo"<br/>";
        print '<img src="'.$photo.'" width="100px" heigth="75px" />'; echo "    
<br/>";
        if($row['Statut']=='disponible'){
        echo("<form action ='emprunter.php' method = 'post'>
        <input name='isbn' value='$id' type='hidden'/>
        <input value='Emprunter' type='submit'/>
    </form>");}
    else{
        $sql2="SELECT `date_retour` FROM `emprunt` WHERE `Isbn`=$id"; 
        $conn->query($sql2);
        foreach ($conn->query($sql2) as $row2) {
        echo"Le livre sera rendu avant le ";print $row2['date_retour'];}
        
    }
    echo"---------------------------------------------------------------------------------------------<br/>";

    }
    echo"<a href='ProjetSite.php'>Retour à la page principale</a>";
$conn= null;
?>