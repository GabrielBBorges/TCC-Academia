<?php 
	session_start();
	if (!isset($_SESSION["login_matric"]) or $_SESSION["login_id_user"] != 2 ) { 
		header("location: index.php"); 
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gerenciar Planos - Live Fitness</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.ico" >

	<!----- Fontes ----->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

	<!----- CSS ----->
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styles-responsive.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">

</head>
<body>
	<header class="header">
		<nav class="menu-icon">
			<input type="checkbox" name="navbar" id="navbar" class="input-menu">
			<label for="navbar">
				<div class="menu-responsive">
					<span class="hamburguer"></span>
				</div>
			</label>
			<ul class="navbar-responsive">
				<li><a href="controle_aluno.php">Gerenciar Matrícula</a></li>
            	<li><a href="planos_list.php">Gerenciar Planos</a></li>
            	<li><a href="modal_list.php">Controlar Modalidades</a></li>
            	<li><a href="#pagamento-info">Gerenciar Pagamento</a></li>
			</ul>
		</nav>
		<a href="admin.php" id="logo"><img src="img/Images_header/logotipo.svg" ></a>
		<a href="https://www.instagram.com/livefitness85/" class="sociais"><img src="img/Images_header/instagram.svg" ></a>
		<a href="https://www.facebook.com/Academia-Live-Fitness-568634870165470" class="sociais"><img src="img/Images_header/facebook.svg" ></a>
		<a href="login.php" class="user"><img src="img/Images_header/user.svg" ></a>
		<h1 class="titulo-header">GERENCIAR PLANOS</h1>
	</header><br>

	<section class="container-2 alunos-table">
		<header class="titulo">
			<h1>Gerenciar Planos</h1>
		</header><br>

		<form method="POST" action="controle.php" class="form-container" id="matricula" style="border: none; box-shadow: none;">
			<label>Nome do Plano</label>
			<input type="name" name="nomePlano"><br>
			<label>Valor</label>
			<input type="text" name="valorPlano"><br>
			<label>Sua Característica</label>
			<input type="text" name="caractPlano" style="height: 150px;"><br>

			<button type="submit" class="botao">Gravar</button><br>
			<input type="reset" name="limpar" class="botao" value="Cancelar"><br>
		    <input type="hidden" name="acao" value="CadastrarPlano">

		</form>
		<a href="admin.php" class="form-container" id="matricula" style="border: none; box-shadow: none;">
			<button type="exit" class="botao">Sair</button>
		</a>
		<header class="titulo">
			<h1>Tabela de Planos</h1>
		</header><br>
	    <table class="table">
			<th>Código Plano</th>
			<th>Nome</th>
			<th>Valor</th>
			<th>Característica</th>
			<th>Ação</th>

			<?php
				include 'processaAcesso.php';
				use processaAcesso as processaAcesso;
				$selectPlano = new \processaAcesso\ProcessaAcesso;

				$plano = $selectPlano->selectPlano();

				foreach ($plano as $planos){
					echo "<tr>";
						echo "<td>";
							echo $planos["tdp_cod"];
						echo "</td>";

						echo "<td>";
							echo $planos["tdp_nome"];
						echo "</td>";

						echo "<td>";
							echo $planos["tdp_valor"];
						echo "</td>";

						echo "<td>";
							echo $planos["tdp_caract"];
						echo "</td>";															

						echo "<td>";
							echo "<a href='gerenciar_plano_editar.php?tdp_cod=" . $planos["tdp_cod"] . "'>Editar</a> | ";
							echo "<a href='gerenciar_plano_delete.php?tdp_cod=" . $planos["tdp_cod"] . "'>Excluir</a>";
						echo "</td>";
					echo "</tr>";					
				}
			?>
		</table><br><br>
	</section>
</body>
</html>