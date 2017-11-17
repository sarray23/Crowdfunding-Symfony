<?php

$con=mysqli_connect("localhost","root","","search") or die("erreur de connexion au serveur $host");
//$db=mysqli_select_db($con,"search") or die("erreur de connexion a la base de donnees");

if(isset($_GET["valeur"]))
{ $var= $_GET["valeur"] ;}
$query="SELECT * FROM mot where valeur Like	'%".$var."%'";
$result = mysqli_query($con,$query);



while($row = mysqli_fetch_row($result)){
$mot = $row[0];
$desc = $row[1];
$link = $row[2];

echo "<tr>
<td>$mot</td>\n
<td>$desc</td>\n
<td><a href=$link>$link</a></td>\n
</tr><br>\n";

}

mysqli_close($con);


?>