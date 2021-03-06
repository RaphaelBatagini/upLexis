<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Teste upLexis</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
				<!-- Static navbar -->
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#"><b>Consultas Sintegra</b></a>
				    </div>
				    <div id="navbar" class="navbar-collapse collapse">
				      <ul class="nav navbar-nav">
								@if($controller == 'SintegrasController' && $action == 'findCnpj')
										<li class="active"><a href="/sintegra/find-cnpj">Consultar CNPJ</a></li>
								@else
										<li><a href="/sintegra/find-cnpj">Consultar CNPJ</a></li>
								@endif

								@if($controller == 'SintegrasController' && $action == 'index')
				        		<li class="active"><a href="/sintegra">Histórico de consultas</a></li>
								@else
				        		<li><a href="/sintegra">Histórico de consultas</a></li>
								@endif
				      </ul>
				      <ul class="nav navbar-nav navbar-right">
								<li><a href="#"><?php echo $user = Auth::user()->name;?></a></li>
				        <li><a href="/auth/logout">Sair</a></li>
				      </ul>
				    </div><!--/.nav-collapse -->
				  </div><!--/.container-fluid -->
				</nav>

	      <div class="jumbotron">
					@if(Session::has('success'))
					    <div class="alert alert-success">
					        {{ Session::get('success') }}
					    </div>
					@endif

					@if(Session::has('error'))
					    <div class="alert alert-danger">
					        {{ Session::get('error') }}
					    </div>
					@endif

					@yield('conteudo')
				</div>
		</div>
	</body>
	@yield('js')
</html>
