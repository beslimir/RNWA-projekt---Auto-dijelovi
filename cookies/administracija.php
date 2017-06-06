<?php 

//include('header.php'); 
//include('left.php'); 

session_start();

echo "<h2>Upravljanje  regijama, zemljama i lokacijama</h2>";
/*OVDJE POCINJE DIO ZA DINAMICKI PRIKAZ*/

if (isset($_POST['username'])){
	if (($_POST['username'] == 'admin') && ($_POST['password'] == 'admin')){
	
	/*ovdje možete ove podatke koje šaljemo iz forme za logiranje usporedit sa onim koji postoje u vašoj bazi, u novokreiranoj tablici KORISNICI.
	Ako se podaci podudaraju, tj ako taj pas ussername/password postoji u bazi ,  onda ide u ovaj odsjecak koda a ako ne onda ide u ELSE dio i ne dopušta logiranje i pristup ovom zašticenom dijhelu...
	*/
	
	$_SESSION['logiran']='DA';
	$_SESSION['vrijeme']=time();
	//$_SESSION['username']='ovdje stavite ime korisnika iz baze';
	//$_SESSION['vrsta']='ovdje stavite razinu ili vrstu korisnika iz baze';
	
	
	//header("Location: administracija.php");
	}
	else {
	echo "Netocno korisnicko ime i/ili lozinka<br>";
	}
}

if (isset($_SESSION['logiran'])) {
//ako je korisnik logiran onda ga pustamo na ovaj dio stranice, inace ga odbijemo sa upozorenjem

	
	if (isset($_GET['dodaj_artikl'])){
		
		if (isset($_GET['ID_ARTIKL'])) { //unosemo zupaniju
		echo "<h3>Rezultat izmjene</h3><br>";
		
		$ID_ARTIKL=$_GET["ID_ARTIKL"];
		$ARTIKL_NAZIV=$_GET["ARTIKL_NAZIV"];
		$ARTIKL_OPIS=$_GET["ARTIKL_OPIS"];
		$ARTIKL_CIJENA=$_GET["ARTIKL_CIJENA"];
		$ARTIKL_VALUTA=$_GET["ARTIKL_VALUTA"];
		$ARTIKL_STANJE=$_GET["ARTIKL_STANJE"];
		$ARTIKL_KOLIČINA=$_GET["ARTIKL_KOLIČINA"];
		$ARTIKL_ID_VOZILA=$_GET["ARTIKL_ID_VOZILA"];
		$SLIKA_ARTIKLA=$_GET["SLIKA_ARTIKLA"];
		
		$server   = "localhost";
		$database = "auto-dijelovi";
		$username = "root";
		$password = "";

		$mysqlConnection = mysql_connect($server, $username, $password);
		if (!$mysqlConnection)
		{
		echo "Please try later.";
		}
		else
		{
		mysql_select_db($database, $mysqlConnection);
		}
   		
		$cmdstr = "insert into ARTIKL values ('$ID_ARTIKL', '$ARTIKL_NAZIV', '$ARTIKL_OPIS', '$ARTIKL_CIJENA', '$ARTIKL_VALUTA', '$ARTIKL_STANJE', '$ARTIKL_KOLIČINA', '$ARTIKL_ID_VOZILA', '$SLIKA_ARTIKLA')";


    	$retval = mysql_query( $cmdstr, $mysqlConnection );
         
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
			else{
         
            echo "Entered data successfully\n";}
		}
		
		else { //prikazemo formu za unos nove zupanije -
		$server   = "localhost";
		$database = "auto-dijelovi";
		$username = "root";
		$password = "";

		$mysqlConnection = mysql_connect($server, $username, $password);
		if (!$mysqlConnection)
		{
		  echo "Please try later.";
		}
		else
		{
		mysql_select_db($database, $mysqlConnection);
		}

		echo "<form action='administracija.php' method='get'>";
		echo "<table>";
		echo "<tr><td>ID_ARTIKL: </td><td><input type='text' name='ID_ARTIKL' value='' size='50'></td></tr>";
		echo "<tr><td>ARTIKL_NAZIV: </td><td><input type='text' name='ARTIKL_NAZIV' value='' size='50'></td></tr>";
		echo "<tr><td>ARTIKL_OPIS: </td><td><input type='text' name='ARTIKL_OPIS' value='' size='50'></td></tr>";
		echo "<tr><td>ARTIKL_CIJENA: </td><td><input type='text' name='ARTIKL_CIJENA' value='' size='50'></td></tr>";
		echo "<tr><td>ARTIKL_VALUTA: </td><td><input type='text' name='ARTIKL_VALUTA' value='' size='50'></td></tr>";
		echo "<tr><td>ARTIKL_STANJE: </td><td><input type='text' name='ARTIKL_STANJE' value='' size='50'></td></tr>";
		echo "<tr><td>ARTIKL_KOLIČINA: </td><td><input type='text' name='ARTIKL_KOLIČINA' value='' size='50'></td></tr>";
		echo "<tr><td>ARTIKL_ID_VOZILA: </td><td><input type='text' name='ARTIKL_ID_VOZILA' value='' size='50'></td></tr>";
		echo "<tr><td>SLIKA_ARTIKLA: </td><td><input type='text' name='SLIKA_ARTIKLA' value='' size='30'></td></tr>";
				echo "<tr><td colspan=\"2\"><INPUT TYPE='submit' name='dodaj_artikl' value='Dodaj novi artikl...'></td></tr>";
		echo "</form>";
		echo "</table>";
		}
		
		
	}
	
	else if (isset($_GET['dodaj_opcinu'])){
	
		if (isset($_GET['sifra_opcine'])) { //unosemo zemlju
		echo "<h3>Rezultat dodavanja nove lokacije</h3><br>";
		
		$sifra_opcine=$_GET["sifra_opcine"];
		$naziv_opcine=$_GET["naziv_opcine"];
		$ID_ARTIKL=$_GET["ID_ARTIKL"];
		

		$db_conn = oci_connect("fsr", "fsr", "//127.0.0.1/XE");
   		
		$cmdstr = "insert into opcina values ($sifra_opcine, '$naziv_opcine', '$sifra_zupanije')";


    	$parsed = oci_parse($db_conn, $cmdstr);
    	if (oci_execute($parsed)) {
		echo "Uspjesno azurirano, nastavite <a href=\"administracija.php\">dalje</a>";
		}
		else {
		echo "NEuspjesno azurirano, pokusajte <a href=\"administracija.php\">opet!</a>";
		}
		}
		
		else { //prikazemo formu za unos nove zemljeui popis regija
		$conn = oci_connect('fsr', 'fsr', '//localhost/XE');
		$sql = oci_parse($conn, "select * from zupanija");
  
  		oci_execute($sql);
		echo "<form action='administracija.php' method='get'>";
		echo "<table>";
		echo "<tr><td>SIFRA OPCINE ID (4 broja): </td><td><input type='text' name='sifra_opcine' value='' size='5'></td></tr>";
		echo "<tr><td>NAZIV OPCINE </td><td><input type='text' name='naziv_opcine' value='' size='30'></td></tr>";
		echo "<tr><td>Odaberite županiju/kanton</td><td><SELECT NAME='sifra_zupanije'>";
  		while ($row = oci_fetch_assoc($sql)){
			echo "<OPTION VALUE='".$row['SIFRA_ZUPANIJE']."'>".$row['NAZIV_ZUPANIJE']."";						
			}
		echo "</SELECT></td></tr>";
		echo "<tr><td colspan=\"2\"><INPUT TYPE='submit' name='dodaj_opcinu' value='Dodaj novu općinu...'></td></tr>";
		echo "</form>";
		echo "</table>";
		}

    }
	else if ((isset($_POST['add_region'])) || (isset($_GET['add']))){
	
		echo "Ovdje bi išao dio za dodoavanje novog djeltnika<br>";


    }
	
	else { //ako nistaniej postavljeno 
		echo "Dodaj novu regiju <br>";
		echo "<a href=\"administracija.php?dodaj_artikl\">Dodaj novi artikl</a><br>";
		echo "<a href=\"administracija.php?dodaj_opcinu\">Dodaj novu opcinu</a><br>";
	
	}

}
else {
echo "Niste logirani..<br>";

echo "<form name= action=\"administracija.php\" method=\"POST\">
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
 
//include('right.php'); 
//include('footer.php');