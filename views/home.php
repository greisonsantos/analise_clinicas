<?php

$email=$_POST['email'];

echo $email;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Análises Clinicas</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../bootstrap/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../bootstrap/font-awesome/font-awesome.css">







	<style type="text/css">


		#centro {
			width:100px;
			height:100px;
			position:absolute;
			top:190px;
			left:800px;
		}
		#img{
			position:absolute;
			top:25px;
			margin-left:10px;

		}




		.menuhorizontal li{ 
			display: inline;

			padding:0px;
			margin: 100px;
			width: 150px;
			border-left: #666666 thin solid;
		}


		.h3{

			text-align: right;
			margin-right: 10px;	
		}

		#emcima:hover{
        color: red;
      }


	</style>
</head>
<body>

	<nav class="navbar navbar-inverse" style="background: #228B22; color: #FFFFFF">
		<br>
		<div class="row">

			<div class="container">
				<div class="row">
					<div class="col-sm-">
						<h4> Laboratório de análises clinicas- Datas/MG</h4> 
					</div>
					<div class="col-sm-">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-6"></div>
								<div class="col-md " id="menu">
									<ul class="nav navbar-nav navbar-right" >
										<ul class="menuhorizontal">
											<li> Bem Vindo Naila!</li>
											<li><a href="../index.html" style="color: white">SAIR</a></li>
										</ul>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
		<br>
	</nav>
	<img src="../img/logo.png" class="center-block" height="auto" width="50px" id="img">



	<div class="row">
		<div class="col-md" id="centro">
			<img src="../img/logo.png" class="img-responsive" alt="Cinque Terre">
		</div>
	</div>

	<br>
	<div class="container">
		<section class="container-fluid text-center" style="min-height: 80vh;">
			<div class="row" id="emcima" style="padding-left: 30px; padding-right: 100px;">
				<a href="agendar_exame.html">
					<div class="col-md-12 col-xs-6 fundo-cor">
						<i class="fa fa-heartbeat fa-3x"></i>
						<h4 class="text-center">Agendar Exames</h4>
					</div>
				</a>
			</div>
			<br><br>
			<div class="row" style="padding-left: 3px; padding-right: 5px;">
				<a href="cadastro_pacientes.html" id="cliente-home">
					<div class="col-md-12 col-xs-6 fundo-cor">
						<i class="fa fa-users fa-3x"></i>
						<h4 class="text-center">Cadastro de Pacientes</h4>
					</div>
				</a>
			</div>
			<br><br>

			<div class="row" style="padding-left: 20px; padding-right: 5px;">
				<a href="gestao_exames.html" id="cliente-home">
					<div class="col-md-12 col-xs-6 fundo-cor">
						<i class="fa fa-medkit fa-3x"></i>
						<h4 class="text-center">Gestão de Exames</h4>
					</div>
				</a>
			</div>
			<br><br>

			<div class="row" style="padding-left: 10px; padding-right: 5px;">
				<a href="relatorio_exames.html" id="cliente-home">
					<div class="col-md-12 col-xs-6 fundo-cor">
						<i class="fa fa-list fa-3x"></i>
						<h4 class="text-center"> Gestão de Relatórios</h4>
					</div>
				</a>
			</div>
		</section>
	</div>

	<footer class="footer fixed-bottom" style="background: #228B22; color: #FFFFFF">
		<p class="text-center"> Copyright Laboratório de Análises Clínicas-Datas/MG. Todos os direitos reservados. </p>
	</footer>

</body>
</html>