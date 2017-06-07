<?php 
/*
include('header.php'); 
include('left.php'); 
*/
session_start();


/*OVDJE POCINJE DIO ZA DINAMICKI PRIKAZ*/



if (isset($_SESSION['logiran'])) {
	if ($_SESSION['vrsta']=='admin') {
		echo "Vi ste admin i možete pristupiti ovdje";
		echo "<p>Ovo je zasticeni paragraf</p>";
		}
		else {
			echo "Prijavljeni ste ali ako niste admin ne možete pristupiti ovdje!";
			}
	echo "<hr>Ovdje mozete izvrsiti <a href=\"logout.php\">odjavu</a>";
} else {
	echo "Niste prijavljeni ili nemate pristup ovim dijelovima web sjedista";
	echo "Pokusajte se  <a href=\"login.php\">prijaviti</a>";
	
	}




/*OVDJE ZAVRŠAVA DINAMICKI DIO*/
/* 
include('right.php'); 
include('footer.php');
 */
?>