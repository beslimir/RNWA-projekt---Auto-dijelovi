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
                <a class="navbar-brand" href="#">
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
                        <a href="mvc.php">MVC</a>
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
                <h1 class="page-header">Web servisi
                    <small>  rezultati pretrage</small>
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
                <h1 class="page-header">Ispis artikla za pojedini model
				<small> WSDL</small>
				</h1>
				<!-- 1.	Putem WSDL-a -  kreirajte web servis koji na osnovu naziva modela vozila (koji se šalje kao jedini argument funkcije) ispisuje dostupne artikle s ostalim  podacima artikla. Klijentski dio poziva web servisa realizirati kao html/web  forma u s poljem za pretraživanje u koje unosimo pojam za pretraživanje i koje nakon submit akcije poziva traženi  web servis koji vraća rezultate a klijentska stranica ih ispisuje u prilagođen, proizvoljnom ispisu -->
					<?php
						if (isset($_REQUEST["naziv"])){
							$naziv = $_REQUEST["naziv"];
							$params = $naziv;
							
							echo "<br><br>".$naziv; 
							try{
								ini_set('soap.wsdl_cache_enabled',0);
								ini_set('soap.wsdl_cache_ttl',0);
								$sClient = new SoapClient('ispis.wsdl',
									array(
										'cache_wsdl'=>WSDL_CACHE_NONE,
										'trace'=>1,
										'user' => 'root',
										'pass' => '',
										'exceptions' => 0
									));
								$response = $sClient->findArticle($params);
								echo "<br><br>ODGOVOR:<br>";

								$risponz = $sClient->__getLastResponse();
								$json_2 = str_replace(array('[',']') , ''  , $risponz );
								$jsonn = json_encode($json_2);
								
								echo '<pre>' . $json_2  . '</pre>';
								
							} catch(SoapFault $e){
								echo $e->getMessage();
							}
						} else {
							echo "Unesite naziv modela kako bi dobili tražene artikle s opisom.<br>";
							echo "<p>Forma poziva web servis koji pretražuje artikle s nazivom koji ste unijeli - vraća JSON odgovor u ovom slučaju</p> ";
							echo "<form method=\"get\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";
							echo "Naziv modela:<br> <input type=\"text\" name=\"naziv\" placeholder=\"WSDL\" style=\"width:200px;\">";
							echo " <input type=\"submit\" name=\"submit\" value=\"Pretraga\"> ";
							echo "</form>";     
						}       
					?>
			</div>
		</div>
		<form action="no_wsdl/client.php" action="details.php" method="post" style="margin-top:20px;">
			<p class="noPaddingForName">Naziv modela:</p>
            <input class="txtbox" type="text" class="form-control" placeholder="No WSDL" name="trazilicax" style="width:200px;">
			<button class="btncls" style="margin-top:5px;">Pretraga</button>
        </form>
				
</body>

</html>
