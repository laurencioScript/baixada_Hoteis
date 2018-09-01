<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baixada Hoteis</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/search.css">
</head>

<body>	
	<div class="container-fluid">
		
		<header class="row"> 				
			<div id="header" class="col-md-2 col-xs-3">
				<h1><a href="index.php">
					<img src="img/Nine Sun logo.png" class="img-responsive" alt="Logo da NineSun">
				</a></h1>
			</div><!-- Logo -->
			<div id="div_input"	>
  				<div  class="col-md-6 col-xs-7">
          			<form action="/search.php" autocomplete="off" method="GET" class="form-horizontal">
            			<div class="form-group">
            	  			<input type="search" class="form-control" id="input" placeholder="Encontre seu hotel ideal">
            			</div>    
          			</form>
        		</div>
          		<button class="btn btn-warning" type="submit" id="btn_search">
            	   	<span class="glyphicon glyphicon-search"></span>
          		</button> 			
			</div>
		</header>
		
		<article id="conteudo" class="row">
			
			<div class="" id="coluna_filter">			
				<div class="menu">
        			<div class="icon-close">           			
						<div class="row"><div class="col-md-offset-10">
							<button id="btn_fechar"><span class="glyphicon glyphicon-arrow-left btn-lg"></span></button>	
						</div></div>
        			</div>
        			<!-- Menu -->
        			<ul id="menu">
            			<li>
                			 <button type="button" class="btn btn-link colo_btn" id="btn_cidade">Cidades</button>
            			</li>
            			<li id="li_cidades"></li>
            			<li>
                			 <button type="button" class="btn btn-link colo_btn" id="btn_classificacao">Classificação</button>
            			</li>
            			<li id="li_classificacao"></li>
            			<li>
                			 <button type="button" class="btn btn-link colo_btn" id="btn_acomodidade">Acomidades</button>
           				</li>
           				<li id="li_acomidades"></li>
            			<li>
                			 <button type="button" class="btn btn-link colo_btn" id="btn_fale_conosco">Keyword</button>
            			</li>
        			</ul>
    			</div>
    			
    			<div id="btn_filter" class="icon-menu">
            		<button id="btn_menu"><span class="glyphicon glyphicon-cog"></span></button>
        		</div>
    			
			</div>
		
			<div class="col-md-8" id="coluna_grid">			
			
			</div>

		</article>

	<footer class="row">         
            <div class="col-md-2 col-xs-6">
              <button type="button" class="btn btn-link colo_btn" id="btn_fale_conosco">Fale Conosco</button>
              <button type="button" class="btn btn-link" id="btn_duvidas">Duvidas</button>  
            </div>  
            <div class="col-md-2 col-xs-5" id="footer_right">
              <button type="button" class="btn btn-link" id="btn_contato">Contato</button>
              <button type="button" class="btn btn-link" id="btn_sobre">Sobre</button>  
            </div>
    </footer>
	
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/buscador.js"></script>
    <script src="js/search.js"></script>
</body>
</html>