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
	<title>Gerenciar Matrícula - Live Fitness</title>
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
		<h1 class="titulo-header">Gerenciar Matrícula</h1>
	</header><br>

	<section class="container-2 alunos-table">
		<header class="titulo">
			<h1>Registros de Alunos</h1>
		</header><br>
	    <table class="table">
			<th>Matrícula</th>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Plano Escolhido</th>
			<th>Preço</th>
			<th>Situação</th>
			<th>Ação</th>
			<?php
				include 'processaAcesso.php';
				use processaAcesso as processaAcesso;
				$selectCliente = new \processaAcesso\ProcessaAcesso;

				$usuario = $selectCliente->selectCliente();

				foreach ($usuario as $usuarios){
					echo "<tr>";
						echo "<td>";
							echo $usuarios["cli_matric"];
						echo "</td>";

						echo "<td>";
							echo $usuarios["cli_nome"];
						echo "</td>";

						echo "<td>";
							echo $usuarios["cli_email"];
						echo "</td>";

						echo "<td>";
							echo "";
						echo "</td>";	

						echo "<td>";
							echo "";
						echo "</td>";

						echo "<td>";
							echo "";
						echo "</td>";								

						echo "<td>";
							echo "<a href='controle_aluno_editar.php?cli_matric=" . $usuarios["cli_matric"] . "'>Editar</a> | ";
							echo "<a href='controle_aluno_delete.php?cli_matric=" . $usuarios["cli_matric"] . "'>Excluir</a>";
						echo "</td>";
					echo "</tr>";					
				}
			?>
		</table><br><br>
		<article style="margin: 0 auto;">
			<a href="controle_aluno_criar.php"><button type="button" class="botao">NOVA CONTA</button></a>
			<a href="admin.php"><input type="button" class="botao" value="SAIR"></a>
		</article>
	</section>
</body>
</html>