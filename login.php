<!DOCTYPE html>
<html>
<head>
    <title>Login - L!VE FITNESS</title>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="script/jquery-3.5.1.min.js"></script> 
    <script type="text/javascript">
        function ocultar(){
            $("#msg-error").animate({ height: 'toggle' });}
        setTimeout(ocultar,3500);
    </script>
</head>
<style type="text/css">
    #msg-error{
        color: #F2F2F2;
        background-color: #DF0101; 
        font-weight: 500;
        font-size: 15px;
        margin: 0 auto;
        padding: 10px;
        width: 260px;
        text-align: center;
        border-radius: 2px;
    }
</style>
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
        <h1 class="titulo-header">LOGIN</h1>
    </header><br>

    <section class="container">
        <form method="POST" action="controle.php" class="form-container" id="login"><br>
            <label>E-mail</label>   
            <input type="email" name="txtEmail" placeholder="usuario@gmail.com" required="">
            <br>
            <label>Senha</label>
            <input type="password" name="txtSenha" placeholder="Senha" required="">
            <br>

            <button type="submit" class="botao">Entrar</button>
            <input type="hidden" name="acao" value="Entrar">

            <a href="matricula.php" class="form-txt"><p>Ainda não é Aluno Live Fitness?
            <br>Matricule-se Agora!</p></a>
        </form>
    </section>

<?php   
error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", 1 ); 

if ($_GET["carga"] == 1) { 
    ?>
    <br>
    <div id="msg-error">
        Dados de login incorretos. 
    </div>
    <?php     
}    
?>  
</body>
</html>