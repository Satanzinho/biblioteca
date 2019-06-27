<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	<title>Sebo Ventura</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<meta name="description" content="Sebo Ventura, o melhor sebo da Região!">
		<meta name="keywords" content="Livros, livraria, sebo, bestsellers, barato, cabo frio, lançamentos, fantasia, terror, romance, contos, poesia, miniaturas, action figure, colecionador, colecionadores, coleção, discos, toca discos, vinil, LP, discos de vinil, chaveiros">
		<meta name="author" content="Matheus de Oliveira  e Jorge Luiz Lassance">
		<meta name="reply-to" content="mateheusoliver@gmail.com / lassancejorgeluiz@gmail.com">
		<meta name="generator" content="NotePad++ 6.5.2">
		<meta name="robots" content="index,follow">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/index.css">
	</head>
	<body>
		<div class="DIV-Container">
		<header class="header">
		  <div class="DIV-Imagem">
			<img src="<?php echo BASE_URL; ?>assets/images/logo sebo ventura2.png" alt="Logo Sebo Ventura" class="logo"> 
			<span class="SPAN-Titulo"><p class="P-Titulo">Sebo Ventura</P></span>
		  </div>
		  <nav class="NAV-MenuTopo">
			<ul class="UL-MenuTopo">
				<li></li>
				<li class="LI-MenuTopo"><a href="<?php echo BASE_URL ?>" class="A-MenuTopo">Home</a></li>
				<li class="LI-MenuTopo"><a href="<?php echo BASE_URL ?>home/quemSomos" class="A-MenuTopo">Quem somos</a></li>
				<li class="LI-MenuTopo"><a href="#" class="A-MenuTopo">Contato</a></li>
				<li class="LI-MenuTopo"><a href="#" class="A-MenuTopo">Gêneros de livros</a>
				</li>
				<li class="LI-MenuTopo"><a href="#" class="A-MenuTopo">Discos de vinil</a></li>
				<li class="LI-MenuTopo"><a href="#" class="A-MenuTopo">Feirinha Ventura</a></li>
				<li></li>							
			</ul>
		  </nav>
		  <div class="cart"><i class="fas fa-shopping-cart"></i></div>
	  </header>
		<?php
		$this->loadViewInTemplate($viewName, $viewData);
		?>
	<footer class="footer">
      <p>2013. Demo Design Responsivo.</p>
      <small class="creditos">Criado por <a href="http://www.popupdesign.com.br">Dani Guerrato</a>. Para o <a href="http://www.tableless.com.br">Tableless</a>. </small>
  	</footer>
  </div>
	</body>
</html>