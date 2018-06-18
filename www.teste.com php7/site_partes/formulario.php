<article class="container">
		<div class="row">
			<section class="col-12 center">
				<legend>Entre em contato</legend>
				<form action="#" method="post">
					<div class="form-inline">
						<div class="col-3">
							<label>Nome:</label>
							<input type="text" name="campo_nome" class="form-control nome" placeholder="Nome Pessoal" required="on">
						</div>
						<div class="col-3">
							<label>Email:</label>
							<input type="email" name="campo_email" class="form-control" placeholder="email@exemple.com" required="on">
						</div>
						<div class="col-3">
							<label>Telefone:</label>
							<input type="number" name="campo_telefone" class="form-control" placeholder="(11) 999999" required="on">
						</div>
						<div class="col-3">
							<input type="submit" name="envio" class="btn btn-secondy mensagem">
						</div>
					</div>
				</form>
			</section>
		</div>
	</article>
	<?php 
	$campo = new HelperCampos();
	$campo->Vazio();
	//$banco = new CRUD();
	//$banco->ConectaBD();
	?>
	