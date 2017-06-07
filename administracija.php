<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Auto-dijelovi 2MB</title>	

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/align.css" rel="stylesheet">
	

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">
	 <link href="css/round-about.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">
                    <img src="images/logo.png" alt="Logo" height="150" width="150" style="margin-top:-50px;"/>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
					<li>
                        <a href="home.php">Početna</a>
                    </li>
                    <li>
                        <a href="about_us.php">O nama</a>
                    </li>
                    <li>
                        <a href="services.php">Usluge</a>
                    </li>
					<li>
                        <a href="web_servisi.php">Web servisi</a>
                    </li>
					<li>
                        <a href="administracija.php">Dodaj artikl</a>
                    </li>
					<li>
                        <a href="MVC/mvc.php">MVC</a>
                    </li>
                    <li>
                        <a href="contact.php">Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dodaj Artikl
                    <small>  Cookies and sessions</small>
                </h1>
                <p class="pocetak">
				</p>
            </div>
        </div>
    </div>
	
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	 <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-10">
				<!-- 1.	Putem WSDL-a -  kreirajte web servis koji na osnovu naziva modela vozila (koji se šalje kao jedini argument funkcije) ispisuje dostupne artikle s ostalim  podacima artikla. Klijentski dio poziva web servisa realizirati kao html/web  forma u s poljem za pretraživanje u koje unosimo pojam za pretraživanje i koje nakon submit akcije poziva traženi  web servis koji vraća rezultate a klijentska stranica ih ispisuje u prilagođen, proizvoljnom ispisu -->
<?php 

//include('header.php'); 
//include('left.php'); 

//session_start();

echo "<h2>Dodavanje artikla u bazu</h2>";
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
		echo "<h3>Rezultat dodavanja</h3><br>";
		
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
               die('Podaci nisu unešeni zbog: ' . mysql_error());
            }
			else{
         
            echo "Artikl uspješno dodan";}
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
		echo "<h3>Rezultat dodavanja novog artikla</h3><br>";
		
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
		
		echo "<a href=\"administracija.php?dodaj_artikl\">Dodaj novi artikl</a><br>";
		echo "<a href=\"logout.php\">Odjavi se</a><br>";
		//echo "<a href=\"administracija.php?dodaj_opcinu\">Dodaj novu opcinu</a><br>";
	
	}

}
else {
echo "<b>Niste logirani..</b><br>";

echo "<form name= action=\"administracija.php\" method=\"POST\">
			<table>
				<tr>	
					<td>Korisnicko ime</td>
					<td><input style=\"margin:10px;\" type=\"text\" name=\"username\" size=\"22\"></td>
				</tr>
				<tr>
					<td>Lozinka</td>
					<td><input style=\"margin:10px;\" type=\"password\" name=\"password\"  size=\"22\"></td>
				</tr>
				<tr>
					<td colspan=\"2\" align=\"right\">
								<input style=\"margin-right:10px;\" type=\"submit\" name=\"submit\" value=\"Logiraj se\"></td>
				</tr>
			</table>
		</form>";
} 


	
/*OVDJE ZAVRŠAVA DINAMICKI DIO*/
 
//include('right.php'); 
//include('footer.php');       
					?>
			</div>
		</div>
		
				
</body>

</html>
