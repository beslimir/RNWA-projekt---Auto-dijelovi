<DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <header style="font-size:20px">
	    <a href='?controller=home&action=index'>Home</a>
        <a href='?controller=modeli&action=index'>Models</a>
	    <a href='?controller=artikli&action=index'>Articles</a>
    </header>

    <?php require_once('routes.php'); ?>

    <footer>
    
    </footer>
  <body>
<html>

<?php
	if(isset($_POST['typeahead'])){
		$model = $_POST['typeahead'];
	}
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
	<script src="../js/jquery.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/small-business.css" rel="stylesheet">
	<link href="../css/contact-css.css" rel="stylesheet">
	<link href="../css/searchbox.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script>
		/*function showResult(str) {
		    if (str.length==0) { 
				document.getElementById("livesearch").innerHTML="";
				document.getElementById("livesearch").style.border="0px";
				return;
		    }
		    if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
		    } else {  // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		    }
		    xmlhttp.onreadystatechange=function() {
				if (this.readyState==4 && this.status==200) {
				  document.getElementById("livesearch").innerHTML=this.responseText;
				  document.getElementById("livesearch").style.border="1px solid #A5ACB2";
				}
		    }
		    xmlhttp.open("GET","livesearch.php?q="+str,true);
		    xmlhttp.send();
		}*/
		
	</script>
	<script src="../js/typeahead.min.js"></script>

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
                <a class="navbar-brand" href="../home.php">
                    <img src="../images/logo.png" alt="Logo" href="../home.php" height="150" width="150" style="margin-top:-50px;"/>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
					<li>
						<a href="../home.php">Početna</a>
					</li>
                    <li>
                        <a href='?controller=modeli&action=index'>Models</a>
                    </li>
                    <li>
                        <a href="../services.php">Usluge</a>
                    </li>
					<li>
                        <a href="../web_servisi.php">Web servisi</a>
                    </li>
					<li>
                        <a href="../administracija.php">Dodaj artikl</a>
                    </li>
					<li>
                        <a href="mvc.php">MVC</a>
                    </li>
                    <li>
                        <a href="../contact.php">Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
		<!-- <div class="row">
				<div class=".col-md-6">
					<div>
						<div class="bs-example">
							<form name="form"  method="post">
								<input type="text" name="vehicle" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Izaberite model..." value="" />
								<input id="search" type="submit" value="Pretraži" />
							</form>
						</div>
					</div>
				</div>
		</div> -->
    </nav>

    <!-- Page Content -->
	<!-- style="padding-top:20px;" set to container below -->
    <div class="container" >
        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="../images/wallpaper.jpg" alt="" width="900" height="350">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>Auto-dijelovi 2MB</h1>
                <p>Auto-dijelovi 2MB d.o.o. je poduzeće koje Vam nudi usluge kupovine dijelova za vozila raznih vrsta, tehnički pregled, popravke te druge usluge.</p>
                <a class="btn btn-primary btn-lg" href="../about_us.php">Opširnije...</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

     

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
                <h2>Kupovina auto dijelova</h2>
                <p>U širokom izboru naše web trgovine možete pronaći polovne i nove dijelove za razne vrste vozila. Slanje brzom poštom, a ugradnja samih dijelova se vrši u prostorima naše firme.</p>
                <a class="btn btn-default" href="../services.php">Više informacija</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Tehnički pregled</h2>
                <p>Tehnički pregled vozila se provodi u skladu sa županijskim zakonom "Zakon o osnovama sigurnosti prometovanja na putevima u Bosni i Hercegovini.</p>
                <a class="btn btn-default" href="../services.php">Više informacija</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Popravak</h2>
                <p>Nudimo usluge popravka vozila te ugradnju raznih dijelova, sukladno vašim potrebama, po najvišim standardima reguliranim državnim zakonima o sigurnosti u prometu.</p>
                <a class="btn btn-default" href="../services.php">Više informacija</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Bešlimir's 2017.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
	

	 <!--
    <script src="../js/jquery.js"></script>
	
    
    <script src="../js/bootstrap.min.js"></script>
	-->
	

</body>

</html>
