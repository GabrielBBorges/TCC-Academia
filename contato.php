<!DOCTYPE html>
<html>
<head>
	<title>Contato - L!VE FITNESS</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.ico" >

	<!----- Fontes ----->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

	<!----- CSS ----->
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/styles-responsive.css">
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
				<li><a href="index.php">Home</a></li>
	            <li><a href="Telaplanos.php">Planos</a></li>
	            <li><a href="Telamodalidades.php">Modalidades</a></li>
	          	<li><a href="sobre.php">Sobre</a></li>
	          	<li><a href="contato.php">Fale Conosco</a></li>
	          	<li><a href="calcular-imc.php">Calcule IMC</a></li>
			</ul>
		</nav>
		<a href="index.php" id="logo"><img src="img/Images_header/logotipo.svg" ></a>
		<a href="https://www.instagram.com/livefitness85/" class="sociais"><img src="img/Images_header/instagram.svg" ></a>
		<a href="https://www.facebook.com/Academia-Live-Fitness-568634870165470" class="sociais"><img src="img/Images_header/facebook.svg" ></a>
		<a href="login.php" class="user"><img src="img/Images_header/user.svg" ></a>
		<h1 class="titulo-header">CONTATO</h1>
    </header><br>
    
    <section class="container">
		<form method="POST" action="#" class="form-container" id="contato"><br>
			<label>Informe seu Nome</label>
			<input type="text" name="nome-contato" required="" maxlength="15" placeholder="Nome">
			<br><br>
			<label>Informe seu Sobrenome</label>
			<input type="text" name="sobrenome-contato" required="" placeholder="Sobrenome">
			<br><br>
			<label>Informe seu E-mail</label>	
			<input type="email" name="txtEmail" required="" placeholder="E-mail" maxlength="40" placeholder="usuario@gmail.com">
			<br>
			<label>Informe sua d??vida, pergunta, sugest??o etc..</label>
			<textarea placeholder="Comente aqui"></textarea>
			<br>
			<button type="submit" class="botao">Enviar</button><br>
		</form>
    </section><br>

    <footer class="footer1 container">
		<article>
			<img src="img/images_footer/logofooter.svg"><br><br>
		</article>
		<article>
			<h1>Endere??o</h1>
			<p>Av. dos Ex-Combatentes, 85 - <br>Santa Cruz, Volta Redonda-RJ</p><br><br>
			<h1>Hor??rio de Atendimento</h1>
			<p>Segunda ?? sexta:  
				<br>6h  - 11h
				<br>16h - 21h
				<br>Sabado e Domingo - Fechada</p>
		</article>
		<article>
			<h1>Redes Sociais</h1>
			<a href=""><img src="img/images_footer/facebookfooter.svg"></a>
			<a href=""><img src="img/images_footer/instagramfooter.svg"></a>
			<br><a href="https://www.gympass.com/end-user/br/gym/412360"><img src="img/images_footer/gympass.png" style="width: 100px;"></a>
			<h1>Servi??os</h1>
			<p>Planos</p>
			<p>Modalidades</p>
			<p>Sobre</p>
		</article>
		<article>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402.7621441862367!2d-44.09426099938404!3d-22.466917000551305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9ebd7e785a63bd%3A0x284bd526b2179113!2sAcademia%20Live%20Fitness!5e0!3m2!1spt-BR!2sbr!4v1595360288893!5m2!1spt-BR!2sbr" frameborder="0" 
			style="border:0; vertical-align: middle;" id="maps" 
			allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
		</article>
	</footer>
	<footer class="footer2 container">
		<p>Copyrights 2020 - Equipe 2 ^_^</p>
	</footer>
</body>
</html>