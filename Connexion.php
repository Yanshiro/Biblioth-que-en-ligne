<?php
header('Location: '.'ProjetSite.php');
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projet";

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
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      if(isset($_POST['identifiant']))
      {
        $identifiant = $_POST['identifiant'];
      }
if(isset($_POST['motdepass']))
      {
        $motdepass = $_POST['motdepass'];
      }     
    $sql = "SELECT * FROM membre WHERE numE = '$identifiant' and mot_passe = '$motdepass'";
    $query = $conn->prepare($sql);
    $query->execute(array($identifiant,$motdepass));

    foreach ($conn->query($sql) as $row) {
        $_SESSION['numE'] =$row['numE'];
        $_SESSION['nom'] =$row['nom'];
        $_SESSION['prenom'] =$row['prenom'];
        $_SESSION['time_start_login'] = time();
    }
    $Prenom=$_SESSION['prenom'];
   }
   echo" Bonjour $Prenom";
   $principale='projetSite.php';
   echo '<a href="' . $principale . '">' . $principale . '</a>'
   ?>