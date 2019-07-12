<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
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
		<header class="Container">
		  <div class="DIV-Redes-Sociais">
		  			<a href="http://www.facebook.com/sebo.venturacf/"><img src="<?php echo BASE_URL; ?>Assets\Imagens\facebook.png" class="IMG-IconesSociais"></a>
		  			<a href="#" class="A-Icones-redes-sociais"><img src="<?php echo BASE_URL; ?>Assets\Imagens\pinterest.png" class="IMG-IconesSociais"></a>
		  			<a href="#" class="A-Icones-redes-sociais"><img src="<?php echo BASE_URL; ?>Assets\Imagens\instagran2.png" class="IMG-IconesSociais"></a>
		  		  	<a href="#" class="A-A-Icone-Shoping"><img src="<?php echo BASE_URL; ?>Assets\Imagens\shop.png" class="IMG-Icone-Shop">
		  		  	</a>
		  		  	<div class="area-login-cadastro">
	  		  		<?php if(!empty($_SESSION['id'])): ?>
	  		  			<a href="<?php echo BASE_URL ?>login/minhaConta" class="login-cadastro">Minha Conta</a> 
	  		  			<a href="<?php echo BASE_URL ?>login/sair" class="login-cadastro">Sair</a>
	  		  		<?php else: ?>
		  		  	<a href="<?php echo BASE_URL ?>login" class="login-cadastro">Logue</a> 
		  		  	<a href="<?php echo BASE_URL ?>login/cadastro" class="login-cadastro">Cadastre-se</a>
		  		  <?php endif; ?>
		  		  </div>
		  </div>
		  <div class="DIV-Imagem">
			<img src="Assets\Imagens\logo sebo ventura2.png" alt="Logo Sebo Ventura" class="logo"> 
			<p class="P-Titulo">Sebo Ventura</P>
		  </div> 
		  <div class="NAV-MenuTopo">
			<nav>
				<ul class="UL-MenuTopo">
					<li class="LI-MenuTopo2"><a class="A-MenuTopo2">oo</a></li>
					<li class="LI-MenuTopo"><a href="<?php echo BASE_URL ?>" class="A-MenuTopo">Home</a></li>
					<li class="LI-MenuTopo" id="Co-MenuTopo-QuemSomos"><a href="<?php echo BASE_URL ?>home/quemSomos" class="A-MenuTopo">Quem somos</a></li>
					<li class="LI-MenuTopo"><a href="#" class="A-MenuTopo">Contato</a></li>
					<li class="LI-MenuTopo"><a href="#" class="A-MenuTopo">Gêneros de livros</a></li>
					<li class="LI-MenuTopo"><a href="#" class="A-MenuTopo">Discos de vinil</a></li>
					<li class="LI-MenuTopo"><a href="#" class="A-MenuTopo">Feirinha Ventura</a></li>
					<li class="LI-MenuTopo2"><a class="A-MenuTopo2" id="Co-A-MenuTopo2">oo</a></li>							
				</ul>
			</nav>
		  </div>
		</header> 
		<?php
		$this->loadViewInTemplate($viewName, $viewData);
		?>
		<footer class="footer">
			<p>2013. Demo Design Responsivo.</p>
			<small class="creditos">Criado por <a href="http://www.popupdesign.com.br">Matheus de Oliveira</a>. Para o A Sebo ventura</a>. <a href="https://br.freepik.com/fotos-vetores-gratis/logotipo">Logotipos das redes sociais por vvstudio - br.freepik.com</a> </small>
		</footer>
	</body>
</html>
