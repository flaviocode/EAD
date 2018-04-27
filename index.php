<!doctype html>
<html lang="pt-br">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap e fontawesome -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/compiler/bootstrap/bootstrap.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/compiler/icones/fontawesome-all.min.css">

		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/compiler/css/estilo.css">

		<title><?php bloginfo('name'); ?></title>
		</head>
	<body>

	<div class="container">
		<div class="row">
			<div class="col-10 mr-auto ml-auto my-3 barra-de-menu-principal">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand d-none" href="#">Navbar</a>
					
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">

						<ul class="navbar-nav mr-auto ml-auto">
							<li class="nav-item mr-4 active">
								<a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
							</li>

							<li class="nav-item mr-4 dropdown">
							
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Tutoriais
								</a>
								
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Action <i class="fab fa-apple float-right"></i> </a>
									<a class="dropdown-item" href="#">Another action</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>

							</li>

							<li class="nav-item mr-4">
								<a class="nav-link" href="#">Contatos</a>
							</li>
						</ul>

						<form class="form-inline mr-4 my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Digite aqui sua busca" aria-label="Search">
							<button class="btn btn-light my-2 my-sm-0" type="submit">Pesquisar</button>
						</form>

					</div>
				</nav>
			</div>
		</div>
	</div>

		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?php bloginfo('template_url'); ?>/node_modules/jquery/dist/jquery.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/node_modules/popper.js/dist/umd/popper.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>