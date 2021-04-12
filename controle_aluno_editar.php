<!DOCTYPE html>
<html>
<head>
    <title>Controle de Aluno Editar - Live Fitness</title>
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
        <h1 class="titulo-header">EDITAR DADOS</h1>
    </header><br>

    <?php 
        include 'processaAcesso.php';
        use processaAcesso as processaAcesso;
        $SelectID = new \processaAcesso\ProcessaAcesso;

        $usuario = $SelectID->SelectID($_GET["cli_matric"]);
    ?>
    <section class="container">
        <form method="POST" action="controle.php" class="form-container" id="matricula">
        <!--action="planos-cliente.php"-->
            <h1 class="form-titulo">Formulário</h1><br>
            <label>Informe seu nome</label>
            <input type="name" name="txtName" required="" maxlength="15" placeholder="Nome" autofocus="" pattern="[a-zA-Záãâéêíîóôõú\s]+$" value="<?php echo $usuario['cli_nome'] ?>">
            <br>
            <label>Informe seu e-mail</label>
            <input type="email" name="txtEmail" required="" placeholder="E-mail" maxlength="40" placeholder="usuario@gmail.com" value="<?php echo $usuario['cli_email'] ?>">
            <br>
            <label>Informe sua senha</label>
            <input type="password" name="txtSenha" required="" placeholder="Senha" minlength="8" maxlength="32" title="min. 8 dígitos">
            <br>
            <label>Informe seu Endereço</label>
            <input type="text" name="txtEnd" required="" placeholder="Endereço" value="<?php echo $usuario['cli_endereco'] ?>">
            <br>
            <label>Informe seu telefone ou celular</label>
            <input type="tel" name="txtTel" required="" placeholder="Telefone ou celular" minlength="11" maxlength="11" title="Ops, preencha o campo corretamente" placeholder="24900000000" pattern="[0-9\s]+$" value="<?php echo $usuario['cli_tel'] ?>">
            <br>
            <label>Tipo de Usuário</label>
            <select name="tipo_usuario">
                <option value="">---------</option>
                <option value="1">Usuário Comum</option>
                <option value="2">Usuário Administrador</option>
            </select><br/>

            <button type="submit" class="botao">Atualizar</button>

            <input type="hidden" name="cli_matric" value="<?php echo $usuario['cli_matric'] ?>"/><br>
            <input type="hidden" name="acao" value="Atualizar">
                
        </form>
    </section>
</body>
</html>