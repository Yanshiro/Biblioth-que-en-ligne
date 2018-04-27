
<?php
echo("Exercice 2 <br/>");
$x="PostgreSQL";
$y="MySQL";
$z=&$x;
$x="PHP 5";
$y=&$x;
echo "x=$x y=$y z=$z";
?>

<?php
$x="7 personnes";
$y=(integer) $x;
$x="9E3";
$z=(double) $x;
echo "x=$x y=$y z=$z <br/><br/>";
?>

<?php
echo"Exercice 4<br/>";
$a=56;
echo "jai $a ans <br/>".":::";

echo 'jai'.$a;
echo"<br/><br/>";
?>

<?php
echo"Exercice 5 <br/>";
$test=0;
$l="php5";
$chaine=strlen($l);
while($test < $chaine) 
{
$string="php5";
echo $string[$test];
$test=$test+1;
}
echo("<br/><br/>");
?>

<?php
echo("Exercice 6 <br/>");
$cpt=0;
do{
    $a=rand(1,1000);
    $b=rand(1,1000);
    $c=rand(1,1000);
    echo "$a,$b,$c <br/>";
    $cpt++;
}while($a%2!=0 || $b%2!=1 || $c%2!=1);
echo"Resultat obtenu en $cpt  coup";
echo("<br/><br/>");
?>
<?php
echo("Exercice 7 <br/>");
function bissex($anne)
{
    if($anne%400==0) return TRUE;
    if ($anne%4==0 && $anne%100!=0) return TRUE;
    return FALSE;
}
function factorielle($n)
{
    $resultat=1;
    for($i=1;$i<$n+1;$i++)
    {
        $resultat=$resultat*$i;
    }
    return $resultat;
}
$factorielle=factorielle(7);
echo("7!=$factorielle <br/>");
function factoriellerec($n)
{
    if($n<=1)   return 1 ;
    return $n*factoriellerec($n-1);
}
$factoriellerec=factoriellerec(5);
echo("5!=$factoriellerec<br/>");
function echange($a,$b)
{
    echo("a=$a et b=$b");
    $c=$a;
    $a=$b;
    $b=$c;
    echo("on echange <br/>");
    echo("a=$a et b=$b");

}$aa=5;
$bb=6;
echange($aa,$bb);
echo("<br/><br/><br/>");


echo("Exercice 8    <br/>");

function replace($a,$b,$c)
{
    $pos=strpos($c,$a);
    $debut=substr($c,0,$pos);
    $longueurdebut=strlen($debut);
    $longueur=strlen($b)+$longueurdebut+2;
    $fin=substr($c,$longueur);
    echo"$debut";
    echo"$b";
    echo"$fin";
    
    
}
replace("Bonjour","Salut","Bonjour, Comment ca va");
echo("<br/><br/>");

?>
<?php
echo "Ex9<br/>";
$tableau[11]="A";
$tableau[]="B";$tableau[]="C";$tableau[]="D";$tableau[]="E";$tableau[]="F";$tableau[]="G";$tableau[]="H";$tableau[]="I";$tableau[]="J";
$tableau[]="K";$tableau[]="L";$tableau[]="M";$tableau[]="N";$tableau[]="O";$tableau[]="P";$tableau[]="Q";$tableau[]="R";$tableau[]="S";$tableau[]="T";
$tableau[]="U";$tableau[]="V";$tableau[]="W";$tableau[]="X";$tableau[]="Y";$tableau[]="Z";
echo("avec le foreach<br/>");
foreach($tableau as $indice => $valeur)
{
    echo "$indice $valeur <br/>";
}
echo("avec le for<br/>");
for($i=11;$i<37;$i++)
{
    echo"$i $tableau[$i] <br/>";
}
echo("<br/><br/>");

?>
<?php
echo "Ex10<br/>";
function multiplication($n)
{
echo "<table border =\"2\" '>";
	for ($ligne=1; $ligne <= $n; $ligne++) { 
		echo "<tr> \n";
		for ($col=1; $col <= $n; $col++) { 
		   $resultat = $col * $ligne;
		   echo "<td>$resultat</td> \n";
		   	}
	  	    echo "</tr>";
		}
        echo "</table>";
    }
    multiplication(12);
    echo("<br/><br/>");

    ?>

<?php
echo "Exercice 11<br/>";
$tableaumois[1]="Janvier";$tableaumois[]="Fevrier";$tableaumois[]="Mars";$tableaumois[]="Avril";
$tableaumois[]="Mai";$tableaumois[]="Juin";$tableaumois[]="Juillet";$tableaumois[]="Aout";
$tableaumois[]="Septembre";$tableaumois[]="Octobre";$tableaumois[]="Novembre";$tableaumois[]="Decembre";
 
echo "<ul>";
    foreach($tableaumois as $valeur){
    echo "<li>$valeur</li>";
}
echo "</ul>";
echo "Les clés sont les nombres de 1 à 12";
echo"<br/>";

$tableaujour =array ("Janvier"=> 31,"Fevrier"=>28,"Mars"=>31,"Avril"=>30,"Mai"=>31,"Juin"=>30,
"Juillet"=>31,"Aout"=>31,"Septembre"=>30,"Octobre"=>31,"Novembre"=>30,"Decembre"=>31);
echo("Les clés pour le deuxieme tableau sont les noms des mois et les valeurs leurs nombres de jours"); 
echo("<table border='2'>");
echo("<tr><br/>");
echo("<td>Mois</td>");
echo("<td>Jours</td>");
foreach($tableaujour as $cle => $valeur) {
    echo("<tr><br/>");
    echo("<td>$cle</td>");
    echo("<td>$valeur</td>");
    echo("</tr>");
} 
echo("</table>");
?>
<?php
echo("Exercice 12");
function affichetableau($assoc)
{
    echo("<table border =\'2\'");
    foreach($assoc as $cle => $valeur) {
        echo("<tr><br/>");
        echo("<td>$cle</td>");
        if(is_array($valeur)){
            $valeur=implode($valeur);
        }
        echo("<td>$valeur</td>");
        echo("</tr>");
    }echo("</table>");
}echo("Exemple tableau des mois avec leurs numeros");
affichetableau($tableaumois);
echo"<br/>";
?>

<?php
echo("Exercice 13");
date_default_timezone_set('Europe/Paris');
$date=getdate();
$j = $date['mday'];
$mo = $date['mon'];
$y = $date['year'];
$h = $date['hours'];
$m = $date['minutes'];
$s = $date['seconds'];
echo" Nous somme le $j/$mo/$y et il est $h:$m:$s";
echo"<br/>";
?>

<?php
echo("Exercice 14");
$ages = array ( "toto" => 20, "titi" => 30, "tata" => 25, "tutu" => 28 );
array_multisort($ages);
affichetableau($ages);
?>

