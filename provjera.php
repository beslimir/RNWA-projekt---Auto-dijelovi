<?php 
/*
include('header.php'); 
include('left.php'); 
*/
session_start();

//echo "<h2>Provjera prijave</h2>";
/*OVDJE POCINJE DIO ZA DINAMICKI PRIKAZ*/

if ((isset($_SESSION['logiran'])) && ($_SESSION['logiran']='DA')) {
//ako je korisnik logiran onda ga ili pustimo na ovaj dio ili 
//cesce proslijedimo na neki default-ni dio web sjedista da opet ne prolazi provjeru jer ne treba;

}
else {
	//provjerimo jesu li poslani usernamei password//ako nisu proslijedimo na login.php


	if ((isset($_POST['username'])) && (isset($_POST['password']))){
		if (($_POST['username'] == 'admin') && ($_POST['password'] == 'admin')){
		
		/*
		ovdje možete ove podatke koje šaljemo iz forme za logiranje usporedit sa onim koji postoje u vašoj bazi, u novokreiranoj tablici KORISNICI.
		Ako se podaci podudaraju, tj ako taj pas ussername/password postoji u bazi ,  onda ide u ovaj odsjecak koda a ako ne onda ide u ELSE dio i ne dopušta logiranje i pristup ovom zašticenom dijhelu...
		
		*/
		
		
		$_SESSION['logiran']='DA';
		$_SESSION['vrijeme']=time();
		//$_SESSION['username']='ovdje stavite ime korisnika iz baze';
		//$_SESSION['vrsta']='ovdje stavite razinu ili vrstu korisnika iz baze';
		$_SESSION['vrsta']='admin'; //ili neka druga rola ovisno o podacima koji su poslani i provjereni
		
		//proslijedimo na zasticeni dio stranice
		header("Location: zasticeni_dio.php");
		}
		else {
		echo "Netocno korisnicko ime i/ili lozinka<br>";
		echo "Ponovno pokusajte <a href=\"login.php\">prijavu</a>";
		}
	}
	else {
		//krivi poziv programa/skripte, presumjeri na login
		header("Location: login.php");
	}
}

	
/*OVDJE ZAVRŠAVA DINAMICKI DIO*/
/* 
include('right.php'); 
include('footer.php');
*/