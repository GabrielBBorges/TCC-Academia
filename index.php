<!DOCTYPE html>
<html>
<head>
	<title>L!VE FITNESS - Academia</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.ico" >

	<!----- Fontes ----->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

	<!----- JQuery ------>
	<script type="text/javascript" src="script/coinslider/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="script/coinslider/coin-slider.min.js"></script>

	<!----- CSS ----->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styles-responsive.css">
	<link rel="stylesheet" href="script/coinslider/coin-slider-styles.css" type="text/css"/>
</head>
<body>
	<nav class="menu">
		<ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Telaplanos.php">Planos</a></li>
            <li><a href="Telamodalidades.php">Modalidades</a></li>
          	<li><a href="sobre.php">Sobre</a></li>
          	<li><a href="contato.php">Fale Conosco</a></li>
          	<li><a href="calcular-imc.php">Calcule IMC</a></li>
        </ul>
        <a href="matricula.php"><p id="matric-nav">Matricule-se</p></a>
		<a href="login.php"><p>Entrar</p><img src="img/Images_header/user.svg"></a>	
	</nav>

	<header class="header">
		<nav class="menu-icon">
			<input type="checkbox" name="navbar" id="navbar" class="input-menu">
			<label for="navbar">
				<div class="menu-responsive">
					<span class="hamburguer"></span>
				</div>
			</label>
			<ul class="navbar-responsive">
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
		<h1 class="titulo-header">#VEMPRALIVE</h1>
	</header><br>

	<section id= "coin-slider" style="font-size: 13px;" class="container">
		<a href=""><img src="img/images_home/banner/livefit-slide.svg"></a>
		<a href="matricula.php"><img src="img/images_home/banner/vempralive-slide.svg"></a>
		<a href="https://www.gympass.com/end-user/br/gym/412360"><img src="img/images_home/banner/gympass-slide.svg"></a>
		<a href=""><img src="img/images_home/banner/comodidades-img.svg"></a>
		<br><br>
	</section>

	<section class="section-planos container">
		<header class="titulo">
			<h1>PLANOS DE MUSCULA????O</h1>
		</header>
		<article class="item">
			<h2>MENSAL</h2>
			<p class="texto-preco">R$75,00</p>
			<a href="matricula.php"><button type="submit" class="botao">Matricule-se</button></a>
		</article>
		<article class="item">
			<h2>TRIMESTRAL</h2>
			<p class="texto-preco">2x R$85,00</p>
			<a href="matricula.php"><button type="submit" class="botao">Matricule-se</button></a>
		</article>
		<article class="item">
			<h2>SEMESTRAL</h2>
			<p class="texto-preco">3x R$115,00</p>
			<a href="matricula.php"><button type="submit" class="botao">Matricule-se</button></a>
		</article>
		<article class="item">
			<h2>ANUAL</h2>
			<p class="texto-preco">12x R$50,00</p>
			<a href="matricula.php"><button type="submit" class="botao">Matricule-se</button></a>
		</article>
		<article id="botao-show"><a href="matricula.php"><button type="submit" class="botao">Matricule-se</button></a></article>
	</section>

	<section class="section-temostb container" >
		<header class="titulo">
			<h1>CONFIRA TAMB??M!</h1>
		</header>
		<article class="item">
			<h2>PLANO FAM??LIA</h2>
			<p class="texto-preco">R$50,00</p>
			<a href="matricula.php"><button type="submit" class="botao">Matricule-se</button></a>
		</article>
		<article class="item">
			<h2>HOR??RIO ESPECIAL</h2>
			<p class="texto-preco">2x R$85,00</p>
			<a href="matricula.php"><button type="submit" class="botao">Matricule-se</button></a>
		</article>
		<article class="item">
			<h2>HOR??RIO ESPECIAL</h2>
			<p class="texto-preco">3x R$115,00</p>
			<a href="matricula.php"><button type="submit" class="botao">Matricule-se</button></a>
		</article>
		<article id="botao-show"><button type="submit" class="botao">Matricule-se</button></article>
	</section>

	<section class="modalidades container">
		<header class="titulo">
			<h1>CONHE??A NOSSAS MODALIDADES!</h1>
		</header>
		<article class="item">
			<h2>Muscula????o</h2>
			<p>?? um conjunto de exerc??cios f??sicos, que visa os fortalecimentos e desenvolvimentos dos m??sculos esquel??ticos.</p><br>
			<a href="Telamodalidades.php"><button type="submit" class="botao">Saiba Mais!</button></a>
		</article>
		<article class="item">
			<h2>GAP Funcional</h2>
			<p>Aula em grupo de treinamento de alta intensidade e curta dura????o, desenvolve o condicionamento atrav??s de circuitos com exerc??cios.</p>
			<a href="Telamodalidades.php"><button type="submit" class="botao">Saiba Mais!</button></a>
		</article>
		<article class="item">
			<h2>Pilates</h2>
			<p>M??todo de condicionamento f??sico, que promove harmonia e balan??o muscular para todas as idades e sa??de f??sica direcionada ??s necessidades individuais da pessoa</p>
			<a href="Telamodalidades.php"><button type="submit" class="botao">Saiba Mais!</button></a>
		</article>
		<article class="item">
			<h2>Ballet</h2>
			<p>Dan??a art??stica apresentada por v??rios bailarinos que, num cen??rio, com acompanhamento de m??sica, dan??am com gra??a e precis??o de t??cnica. </p>
			<a href="Telamodalidades.php"><button type="submit" class="botao">Saiba Mais!</button></a>
		</article>
		<article class="item">
			<h2>Jiu Jitsu</h2>
			<p>?? uma arte marcial, onde usa-se a for??a e o peso do advers??rio contra ele, sendo permitido, inclusive, lan??ar o advers??rio em queda.</p><br>
			<a href="Telamodalidades.php"><button type="submit" class="botao">Saiba Mais!</button></a>
		</article>
		<article id="botao-show"><a href="Telamodalidades.php"><button type="submit" class="botao">Saiba Mais!</button></a></article>
		
	</section>

	<section class="comodidades container">
		<header class="titulo">
			<h1>COMODIDADES</h1>
		</header>
		<article class="item">
			<img src="img/images_home/comodidades/shower.svg">
		</article>
		<article class="item">
			<img src="img/images_home/comodidades/snowfall.svg" style="padding: 10px 10px;">
		</article>
		<article class="item">
			<img src="img/images_home/comodidades/fruit.svg">
		</article>
		<article class="item">
			<img src="img/images_home/comodidades/loja.svg">
		</article>
		<article class="item">
			<img src="img/images_home/comodidades/locker.svg">
		</article>
		<article class="item">
			<img src="img/images_home/comodidades/wifi.svg">
		</article>
	</section>

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

	<script type="text/javascript">
		$(document).ready(function() {
			$('#coin-slider').coinslider({effect: 'none', width: 1060, height: 406, delay: 2000, hoverPause: true });
		});
	</script>
</body>
</html>