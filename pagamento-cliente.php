<?php 
	$nome = $_POST["txtName"];
	$email = $_POST["txtEmail"];
	$senha = $_POST["txtSenha"];
	$endereco = $_POST["txtEnd"];
	$tel = $_POST["txtTel"];
	$tipo_usuario = $_POST["tipo_usuario"];
	$acao = $_POST["acao"];
  $gerenciar_aluno = $_POST["gerenciar_aluno"];

  if ($_POST["select"] == "musc-men") {
    $plano = "Plano de Musculação MENSAL";
    $planoPreco = "R$75,00";
  } 
  else if ($_POST["select"] == "musc-tri") {
    $plano = "Plano de Musculação TRIMESTRAL";
    $planoPreco = "2x R$85,00";
  } 
  else if ($_POST["select"] == "musc-sem") {
    $plano = "Plano de Musculação SEMESTRAL";
    $planoPreco = "3x R$115,00";
  } 
  else if ($_POST["select"] == "musc-anual") {
    $plano = "Plano de Musculação ANUAL";
    $planoPreco = "12x R$50,00";
  }
  else if ($_POST["select"] == "familia") {
    $plano = "Plano Família";
    $planoPreco = "R$50,00";
  }
  else if ($_POST["select"] == "especial1") {
    $plano = "Horário Especial - 11:00 ás 15:00";
    $planoPreco = "R$35,00";
  }
  else if ($_POST["select"] == "especial2") {
    $plano = "Horário Especial - 11:00 ás 17:00";
    $planoPreco = "R$40,00";
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Detalhes do Pagamento - L!VE FITNESS</title>
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
    <form method="POST" action="controle.php" class="form-container" id="matricula">
      <h1 class="form-titulo">Resumo da Compra</h1><br>
      <label>Plano Escolhido: <?php echo $plano; ?></label><br>
      <label>Preço: <?php echo $planoPreco; ?></label><br>
    </form>
  </section>
  <br>
  <section class="container">
    <form method="POST" action="controle.php" class="form-container" id="matricula">
      <h1 class="form-titulo">Informações de pagamento</h1><br>
      <div id="imagens-cartoes">
        <img src="img/images_form/visa.jpg">
        <img src="img/images_form/elo.png">
        <img src="img/images_form/mastercard.png">
      </div><br>
      <label>Número do Cartão</label>
      <input type="text" name="nome-cartao" placeholder="0000 0000 0000 0000" autocomplete="" required="" autofocus=""  
            pattern="[0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}$" maxlength="19">
      <br>
      <label>Nome do Titular</label>
        <div class="form-nome-sobrenome">
          <input type="name" name="titular-nome" required="" placeholder="Nome" pattern="[a-zA-Záãâéêíîóôõú\s]+$">
          <input type="name" name="titular-sobrenome" required="" placeholder="Sobrenome" pattern="[a-zA-Záãâéêíîóôõú\s]+$">
        </div>
        <br>
        <label>Vencimento</label>
        <input type="date" name="venc-cartao" required="" placeholder="mm/aaaa">
        <br>
        <label>Código de Segurança (CVV)</label>
        <input type="text" name="cvv-cartao" maxlength="3" placeholder="000" required="" title="Apenas Número (max. 3)" pattern="[0-9\s]+$">
        <br>

        <button type="submit" class="botao">Próximo >></button><br>

        <input type="hidden" name="txtName" value="<?php echo $nome;?>">
        <input type="hidden" name="txtEmail" value="<?php echo $email;?>">
        <input type="hidden" name="txtSenha" value="<?php echo $senha;?>">
        <input type="hidden" name="txtEnd" value="<?php echo $endereco;?>">
        <input type="hidden" name="txtTel" value="<?php echo $tel;?>">
        <input type="hidden" name="tipo_usuario" value="<?php echo $tipo_usuario;?>">
        <input type="hidden" name="acao" value="<?php echo $acao;?>">
        <input type="hidden" name="gerenciar_aluno" value="<?php echo $gerenciar_aluno;?>">

        <input type="hidden" name="select" value="<?php echo $plano;?>">
        <input type="hidden" name="selectPreco" value="<?php echo $planoPreco;?>">
    </form>
  </section>
  <br><br>
</body>
</html>