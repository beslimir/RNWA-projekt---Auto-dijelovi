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
	

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">
	<link href="css/round-about.css" rel="stylesheet">
	<link href="css/searchbox.css" rel="stylesheet">
	

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
                    <img src="images/logo.png"  alt="Logo" height="150" width="150" style="margin-top:-50px;"/>
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
                <h1 class="page-header">MVC
                    <small>  Model-View-Controller</small>
                </h1>
                <p class="pocetak">Za odabrani projekt potrebno je:
a) Instalirati razvojno okruženje za projektni zadatak (wamp, xampp, i sl)
b) Kreirati GITHUB instancu i repozitorij projekta kroz koji će studenti surađivati i
distribuirati kod te isporuke programa te poslati mailom profesoru i asistentu URL
projekta na GITHUB-u;
c) Kreirati prototip web sjedišta projekta , HTML dinamičku ili statičku stranicu, s općim
podacima o projektu – zadatak, članovi tima, model baze, kod za bazu isl te
izbornikom koji će voditi prema odabranim funkcionalnostima (npr prikaza)
d) Sjedište treba uraditi u skladu s HTML5 specifikacijom i treba se validirati na nekom
od online validatora (https://validator.w3.org/ ili https://html5.validator.nu/)
e) Poželjno je koristiti neki od frontend framework-a (kao npr. http://getbootstrap.com/ ili
http://foundation.zurb.com/ ili http://getskeleton.com/ ili https://purecss.io/ ili , poželjno
je koristiti tzv „admin theme“, npr u pretraživač unesite „naziv framework i admin
theme free“ ili „naziv framewor admin theme open source“
f) Sve ostale funkcionalnosti koje će dobivati tjedno, sukladno prezentiranom gradivu i
cjelinama (AJAX, WEB servisi, REST, MVC, Autorizacija i autentifikacija) će se s
naslovne stranice povezivati dodanim poveznicama iz osnovnom izbornika
g) Sve romjene i ažuriranaj također potvrditi i učiniti dostupnim na github repozitoriju
vašeg projekta;</p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">O nama</h2>
            </div>
           
            <div class="emp" >
                <img class=" img-responsive img-center" src="images/beslo.jpg" alt="">
                <h3 class="ime">Marin Bešlo
                    <small>Bachelor of Computing</small>
                </h3>
                <p class="ime2">Implementirati pretraživanje zapisa/redaka iz baze
podataka, putem AJAX metode, sa sljedećom
funkcionalnošću :
Na osnovu naziva modela vozila koji se upisuje u polje
formeza pretraživanje, dinamički nakon upisa prvog
znaka ispisuje dostupne artikle s ostalim podacima
artikla, u HTML tablici koja će se prikazati ispod forme
za pretraživanje unutar određenog DIV-a,
na dva načina:
1) AJAX 1 je putem klasičnog Javascript
XMLHttpRequest objekta a
2) AJAX 2 je putem JQUERY ajax metoda</p>
            </div>
            <div class="emp">
                <img class=" img-responsive img-center" src="images/mirko.jpg" alt="">
                <h3 class="ime">Mirko Bagarić
                    <small>Prva lopata Travnika</small>
                </h3>
                <p class="ime2">Implementirati pretraživanje zapisa/redaka iz baze
podataka, putem AJAX metode, sa sljedećom
funkcionalnošću :
Na osnovu naziva modela vozila koji se upisuje u polje
formeza pretraživanje, dinamički nakon upisa prvog
znaka ispisuje dostupne artikle s ostalim podacima
artikla, u HTML tablici koja će se prikazati ispod forme
za pretraživanje unutar određenog DIV-a,
na dva načina:
1) AJAX 1 je putem klasičnog Javascript
XMLHttpRequest objekta a
2) AJAX 2 je putem JQUERY ajax metoda</p>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p style="text-align:center; margin-top:30px;">Copyright &copy; 2MB website 2017.</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
