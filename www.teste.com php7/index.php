<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Curriculo</title>
	<meta charset="utf-8">
	<meta name="description" content="PHP top">
	<meta http-equiv="refresh" content="120">
	<meta name="auhor" content="Guilherme Fogo">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script type="text/javascript" src="js/importante.js"></script>
</head>
<body>
	<?php
		//importando dependencias
		include 'php/Helper/Campos.php';
		include 'php/Objetos/Cliente.php';
		// banco de dados
		include 'php\DBPHP\CRUD.php';

		
		// importando aparencia do site
		include 'site_partes\menu_principal.php';
	 	include 'site_partes\carroseu.php';
	 	include 'site_partes\conteudo.php';
	 	include 'site_partes\formulario.php'; 
	 	include 'site_partes\mapa.php';
	 	include 'site_partes\footer.php';
	?>
</body>
</html>