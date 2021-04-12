<!DOCTYPE html>
<html> 
<head>
    <title>Calcular IMC - Live Fitness</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.ico" >
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
            </ul>
        </nav>
		<a href="index.php" id="logo"><img src="img/Images_header/logotipo.svg" ></a>
		<a href="https://www.instagram.com/livefitness85/" class="sociais"><img src="img/Images_header/instagram.svg" ></a>
		<a href="https://www.facebook.com/Academia-Live-Fitness-568634870165470" class="sociais"><img src="img/Images_header/facebook.svg" ></a>
		<a href="login.php" class="user"><img src="img/Images_header/user.svg" ></a>
		<h1 class="titulo-header">CÁLCULO DE IMC</h1>
	</header><br>

    <section class="container">
        <form method="POST" action="calculo-imc-resultado.php" class="form-container" id="calculoimc"><br>
            <label>PESO</label>
            <input type="text" name="peso" placeholder="em KG" required=""><br>
            <label>ALTURA</label>
            <input type="text" name="altura" placeholder="em M" required=""><br>
            <button type="submit" class="botao">Resultado</button><br>
        </form>
    </section>

</body>
</html>