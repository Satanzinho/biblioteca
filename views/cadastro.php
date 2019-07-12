<div class="container-login-cadastro">
	<?php if(!empty($msg)): ?>
		<?php echo $msg; ?>
	<?php endif; ?><br><br>
	<form method="POST">
		<label for="nome">NOME:</label><br>
		<input type="text" name="nome" id="nome"><br><br>
		<label for="email">EMAIL:</label><br>
		<input type="email" name="email" id="email"><br><br>
		<label for="senha">SENHA:</label><br>
		<input type="password" name="senha" id="senha"><br><br>
		<input type="submit" value="ENTRAR">
	</form>
</div>