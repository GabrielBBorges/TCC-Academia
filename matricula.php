<!DOCTYPE html>
<html>
<head>
    <title>Matrícula - L!VE FITNESS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.ico" >

    <!----- Fontes ----->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!----- CSS ----->
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
                <li><a href="calcular-imc.php">Calcule IMC</a></li>
            </ul>
        </nav>
        <a href="index.php" id="logo"><img src="img/Images_header/logotipo.svg" ></a>
        <a href="https://www.instagram.com/livefitness85/" class="sociais"><img src="img/Images_header/instagram.svg" ></a>
        <a href="https://www.facebook.com/Academia-Live-Fitness-568634870165470" class="sociais"><img src="img/Images_header/facebook.svg" ></a>
        <a href="login.php" class="user"><img src="img/Images_header/user.svg" ></a>
        <h1 class="titulo-header">MATRÍCULA</h1>
    </header><br>

    <section class="container">
        <form method="POST" action="planos-cliente.php" class="form-container" id="matricula">
            <h1 class="form-titulo">Informações do Cliente</h1><br>
            <label>Informe seu nome</label>
            <input type="name" name="txtName" required="" maxlength="45" placeholder="Nome" autofocus="" pattern="[a-zA-Záãâéêíîóôõú\s]+$">
            <br>
            <label>Informe seu e-mail</label>
            <input type="email" name="txtEmail" required="" placeholder="E-mail" maxlength="40" placeholder="usuario@gmail.com">
            <br>
            <label>Informe sua senha</label>
            <input type="password" name="txtSenha" required="" placeholder="Senha" minlength="8" maxlength="32" title="min. 8 dígitos">
            <br>
            <label>Informe seu Endereço</label>
            <input type="text" name="txtEnd" required="" placeholder="Endereço">
            <br>
            <label>Informe seu telefone ou celular</label>
            <input type="tel" name="txtTel" required="" placeholder="Telefone ou celular" minlength="11" maxlength="11" title="Ops, preencha o campo corretamente" placeholder="24900000000" pattern="[0-9\s]+$">
            <br>

            <button type="submit" class="botao">Próximo >>></button>
            <a href="login.php" class="form-txt"><p>Já é um aluno?
            <br>Clique aqui para fazer login!</p></a>

            <input type="hidden" name="tipo_usuario" value="1">
            <input type="hidden" name="acao" value="Cadastrar">
            <input type="hidden" name="gerenciar_aluno" value="">   
        </form>
    </section>
    <br><br>
</body>
</html>
