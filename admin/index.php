

<!doctype html>
<html lang="pt-br">

<head>
	<title>Dashboard | Mania de Arte Atelie - By Renata Carvalho</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/estilo.css">
		
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	
</head>

<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="#">
					<img src="../img/logo.svg" alt="Clínica Pet" class="img-responsive logo">
				</a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth">
						<i class="lnr lnr-arrow-left-circle"></i>
					</button>
				</div>
				
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="../img/miniPortaJoias.jpg" class="img-circle" alt="Avatar"> <span> Renata Carvalho</span>
								<i class="icon-submenu lnr lnr-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">
										<i class="lnr lnr-user"></i>
										<span>My Profile</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="lnr lnr-envelope"></i>
										<span>Message</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="lnr lnr-cog"></i>
										<span>Settings</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="lnr lnr-exit"></i>
										<span>Logout</span>
									</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li>
							<a href="index.php" class="active">
								<i class="lnr lnr-home"></i>
								<span>Dashboard</span>
							</a>
						</li>
						<li>
							<a href="index.php?p=banner" class="">
								<i class="lnr lnr-code"></i>
								<span>Banner</span>
							</a>
						</li>
						<li>
							<a href="index.php?p=bio" class="">
								<i class="lnr lnr-chart-bars"></i>
								<span>Bio</span>
							</a>
						</li>
						<li>
							<a href="index.php?p=contato" class="">
								<i class="lnr lnr-cog"></i>
								<span>Contato</span>
							</a>
						</li>
						<li>
							<a href="index.php?p=depoimento" class="">
								<i class="lnr lnr-alarm"></i>
								<span>Depoimento Pg</span>
							</a>
						</li>
						<!--<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed">
								<i class="lnr lnr-file-empty"></i>
								<span>Páginas</span>
								<i class="icon-submenu lnr lnr-chevron-left"></i>
							</a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="#" class="">PG 01</a></li>
									<li><a href="#" class="">PG 02</a></li>
									<li><a href="#" class="">PG 03</a></li>
								</ul>
							</div>
						</li>-->
						<li>
							<a href="index.php?p=pergFreq" class="">
								<i class="lnr lnr-dice"></i>
								<span>Perguntas Frequentes</span>
							</a>
						</li>
						<li>
							<a href="index.php?p=portf" class="">
								<i class="lnr lnr-text-format"></i>
								<span>Portfólio</span>
							</a>
						</li>
						<!--<li>
							<a href="#" class="">
								<i class="lnr lnr-linearicons"></i>
								<span>Opção 06</span>
							</a>
						</li>-->
					</ul>
				</nav>
			</div>
		</div>
	
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Sistema Web - Mania de Arte Atelie</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<p>
											BOTÃO 01
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<p>
											BOTÃO 02
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<p>
											BOTÃO 03
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<p>
											BOTÃO 04
										</p>
									</div>
								</div>
							</div>
							
						</div>
						<div class="panel-heading">
						<?php
						
						$pagina = @$_GET["p"];

						if($pagina == NULL){require_once("dashboard/dashboard.php");
						}
						
						if($pagina == "banner"){require_once("banner/banner.php");
						}						
						if($pagina == "contato"){require_once("contato/listar-contato.php");
						}
						if($pagina == "depoimento"){require_once("depoimento/pgdepoimento.php");
						}
						if($pagina == "bio"){require_once("bio/bio.php");
						}
						if($pagina == "portf"){require_once("portf/portf.php");
						}
						if($pagina == "pergFreq"){require_once("pergFreq/pergFreq.php");
						}
							
							
					
						?>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2019 <a href="https://www.supremodigital.com.br" target="_blank">Supremo Digital</a>. - Renata Carvalho</p>
			</div>
		</footer>
	</div>

	
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>	
</body>
</html>
