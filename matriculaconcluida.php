<!DOCTYPE html>
<html>
<head>
	<title>Academia Live Fitness</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.ico" >
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styles-responsive.css">
</head>
<style type="text/css">
	body, html{
		background-color: #FFFFFF;
		margin: 0 auto;
	}
	.container-mat{
		display: flex;
		height: 100%;
		flex-direction: column;
		margin: 0 auto;
		height: 100%;
		align-items: center;
		padding: 100px;
	}
	.container-mat h1, .container-mat h2{ text-align: center; }
	.container-mat .botao{ 
		margin: 0 auto;
		width: 250px; 	
	}
	.texto1{ color: #EC803B; }
		.texto1 span{
			color: #151515;
			font-size: 34px;
		}
	.texto2{ color: #151515; }
		.texto2 span{
			color: #EC803B;
			font-size: 34px;
		}

	@media screen and (min-width: 100px) and (max-width: 500px){

		.container-mat{
			padding: 50px 20px 10px 20px;
		}

		.texto1 span{
			color: #151515;
			font-size: 20px;
		}

		.texto2 span{
			color: #EC803B;
			font-size: 20px;
		}
	}
</style>
<body>
    <section class="container-mat">
        <img src="img/Images_header/logotipo.svg" id="logo">
        <h1 class="texto1"> Matrícula <span>CONCLUÍDA</span> com SUCESSO!</h1>
	    <h1 class="texto2">Agora <span>VOCÊ</span> é <span>ALUNO</span> da <span>ACADEMIA L!VE FITNESS!</span></h1>
	    <h2>Com os dados preenchidos, faça Login para ter acesso a sua conta</h2><br>
      	<form method="POST" action="login.php">
			<button class="botao">Ir para página de Login</button>
		</form>
    </section>
</body>
</html>
