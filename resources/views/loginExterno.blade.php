<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>PROTOCOLO-SELDF</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="/assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="/assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/assets/js/html5shiv.min.js"></script>
		<script src="/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">


		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="container">
									<div class="row">
										<div class="col-md-8 ancoras" style="margin-bottom: 5px">
											<a href="http://www.esporte.df.gov.br/home/">
												<img src="/sel_files/cabecalhoSEL.jpg">
											</a>
										</div>
									</div>
								</div>
								<div class="busca">
									<div class="container" style="width: 60%">
										<div class="row">
											<div class="col-md-3 col-sm-3">
												<a href="http://www.brasilia.df.gov.br/" target="_blank"><img src="/sel_files/ico-logo-gdf.svg" alt="Governo do Distrito Federal" style="height:100px"></a>
											</div>
											<div class="col-md-9 col-sm-9" >
												<h2>Protocolo Virtual</h2>
											</div>
										</div>
										<hr>
										<div class="menu-principal">
											<div class="container">
												<div class="row">
													<div class="col-md-12 text-left">
														<header id="masthead" class="site-header" role="banner">
															<div class="header-main">
																<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
																	<button class="menu-toggle">Primary Menu</button>
																</nav>
															</div>
														</header><!-- #masthead -->
													</div>
												</div>
											</div>
										</div>
										<div class="row" >
											<div class="col-sm-12" style="margin-bottom: 10px; background-color: #F5F5F5" >
												<h3 style="text-align: center;padding-bottom: 5px; font-weight: bolder">Login de usuário</h3>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12 col-md-4">
												<div class="form-group">
													<h4 for="exampleInputEmail1" style="font-weight: bolder">Tipo de Usuário</h4>
													<div class="row">
														<div class="col-sm-12">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="inlineRadioOptions" id="TipoUsuarioFisica">
																<label class="form-check-label" for="inlineRadio1">Atleta</label>
																&nbsp;
																<input class="form-check-input" type="radio" name="inlineRadioOptions" id="TipoUsuarioJuridica">
																<label class="form-check-label" for="inlineRadio2">Federação</label>
															</div>

														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-md-4">

											</div>
											<div class="col-sm-12 col-md-4">
												<strong>Ainda não tem cadastro? Faça o seu clicando <a href="#" class="btn btn-primary btn-xs no-border">AQUI</a></strong>
											</div>
										</div>
										<form id="formLoginFisica">
											<div class="form-group">
												<label for="exampleInputEmail1">CPF</label>
												<input type="text" class="form-control cpf" id="loginFisica" aria-describedby="emailHelp">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Senha</label>
												<input type="password" class="form-control" id="senhaFisica" placeholder="Senha">
											</div>
											<button type="submit" class="btn btn-primary btn-block">Enviar</button>
										</form>
										<form id="formLoginJuridica">
											<div class="form-group">
												<label for="exampleInputEmail1">CNPJ</label>
												<input type="text" class="form-control cnpj" id="loginJuridica" aria-describedby="emailHelp">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Senha</label>
												<input type="password" class="form-control" id="senhaJuridica" placeholder="Senha">
											</div>
											<button type="submit" class="btn btn-primary btn-block">Enviar</button>
										</form>

									</div>

								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">

							SEL-DF &copy; 2020
						</span>

						&nbsp; &nbsp;
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="/assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="/assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="/assets/js/ace-elements.min.js"></script>
		<script src="/assets/js/ace.min.js"></script>
		<script src="/js/jsProtExerno.js"></script>
		<script src="/vendor/mask/jquery.mask.js"></script>

		<!-- inline scripts related to this page -->
	</body>

	<script>
		$(document).ready(function(){
			$('.date').mask('00/00/0000');
			$('.time').mask('00:00');
			$('.date_time').mask('00/00/0000 00:00:00');
			$('.cep').mask('00000-000');
			$('.phone').mask('(00) 0000-0000');
			$('.cel').mask('(00) 00000-0000');
			$('.phone_us').mask('(000) 000-0000');
			$('.mixed').mask('AAA 000-S0S');
			$('.cpf').mask('000.000.000-00', {reverse: true});
			$('.cnpj').mask('00.000.000/0000-00', {reverse: true});
			$('.numeroComPonto').mask('000.000.000.000.000', {reverse: true});
			$('.money').mask('000.000.000.000.000,00', {reverse: true});
			$('.licencaSO').mask('AAAAA-AAAAA-AAAAA-AAAAA-AAAAA', {reverse: false});
			$('.anydesk').mask('000 000 000', {reverse: false});
			$('.tempo').mask('00:00:00:000', {reverse: false});
		});

	</script>

</html>
