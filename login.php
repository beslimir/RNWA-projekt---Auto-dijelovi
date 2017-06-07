<?php 

/* AKO KORISTITE template 
include('header.php'); 
include('left.php'); 
*/
session_start();

echo "<h2>Prijava na SUSTAV XYZ</h2>";
/*OVDJE POCINJE DIO ZA DINAMICKI PRIKAZ*/


if ((isset($_SESSION['logiran'])) && ($_SESSION['logiran']='DA')) {
//ako je korisnik logiran onda ga ili pustimo na ovaj dio ili cesce proslijedimo na neki default-ni dio web sjedista;



}
else {
echo "<h3>Unesite podatke za prijavu</h3>";

echo "<form action=\"provjera.php\" method=\"POST\">
			<table>
				<tr>	
					<td>Korisnicko ime</td>
					<td><input type=\"text\" name=\"username\" size=\"20\"></td>
				</tr>
				<tr>
					<td>Lozinka</td>
					<td><input type=\"password\" name=\"password\"  size=\"22\"></td>
				</tr>
				<tr>
					<td colspan=\"2\" align=\"right\">
								<input type=\"submit\" name=\"submit\" value=\"Logiraj se >>\"></td>
				</tr>
			</table>
		</form>";
} 


	
/*OVDJE ZAVRŠAVA DINAMICKI DIO*/
/* AKO KORISTITE template 
include('right.php'); 
include('footer.php');
*/
?>