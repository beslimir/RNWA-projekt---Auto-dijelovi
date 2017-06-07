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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	

    <!-- Custom CSS -->
    <link href="../css/small-business.css" rel="stylesheet">
	 <link href="../css/round-about.css" rel="stylesheet">

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
                        <a href="../about_us.php">O nama</a>
                    </li>
                    <li>
                        <a href="../usluge.html">Usluge</a>
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
    </nav>

    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Traženi pojam
                    <small>  rezultati pretrage</small>
                </h1>
                <header style="font-size:20px">
					<a href='?controller=home&action=index'>Home</a>
				    <a href='?controller=modeli&action=index'>Models</a>
				    <a href='?controller=artikli&action=index'>Articles</a>
				</header>
				
				<?php require_once('routes.php'); ?>
            </div>
        </div>

        

        

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
