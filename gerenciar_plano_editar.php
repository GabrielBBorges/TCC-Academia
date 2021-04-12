<!DOCTYPE html>
<html>
<head>
    <title>Editar Planos - Live Fitness</title>
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
        <h1 class="titulo-header">DELETAR DADOS</h1>
    </header><br>

    <?php 
        include 'processaAcesso.php';
        use processaAcesso as processaAcesso;
        $SelectIDPlano = new \processaAcesso\ProcessaAcesso;

        $plano = $SelectIDPlano->SelectIDPlano($_GET["tdp_cod"]);
    ?>
    <section class="container">
        <form method="POST" action="controle.php" class="form-container" id="matricula"><br>
            <label>Nome do Plano</label>
            <input type="name" name="nomePlano" value="<?php echo $plano['tdp_nome'] ?>"><br>
            <label>Valor</label>
            <input type="text" name="valorPlano" value="<?php echo $plano['tdp_valor'] ?>"><br>
            <label>Sua Característica</label>
            <input type="text" name="caractPlano" style="height: 150px;" value="<?php echo $plano['tdp_caract'] ?>"><br>

            <button type="submit" class="botao">Atualizar</button>
            <input type="hidden" name="tdp_cod" value="<?php echo $plano['tdp_cod'] ?>"/><br>
            <input type="hidden" name="acao" value="AtualizarPlano">
        </form>
    </section>
</body>
</html>