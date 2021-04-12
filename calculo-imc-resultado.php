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
                <li><a href="calcular-imc.php">Calcule IMC</a></li>
            </ul>
        </nav>
        <a href="index.php" id="logo"><img src="img/Images_header/logotipo.svg" ></a>
        <a href="https://www.instagram.com/livefitness85/" class="sociais"><img src="img/Images_header/instagram.svg" ></a>
        <a href="https://www.facebook.com/Academia-Live-Fitness-568634870165470" class="sociais"><img src="img/Images_header/facebook.svg" ></a>
        <a href="login.php" class="user"><img src="img/Images_header/user.svg" ></a>
        <h1 class="titulo-header">CÁLCULO DE IMC</h1>
    </header><br>

    <style type="text/css">
        h1, h2, #cor{
            padding: 0px 10px;
            margin: 0 auto;
            font-family: 'Montserrat', sans-serif;  
            color: #151515;
        }
        h1{
            font-size: 20px;
            text-align: center;
        }
        h2{
            font-size: 15px;
            color: #151515;
        }
        #cor{
            color: #EC803B;
            font-size: 25px;
        }

        a{
            text-align: center;
        }
    </style>

    <section class="container">
        <article method="POST" action="calculo-imc-resultado.php" class="form-container" style="max-width: 700px;">
            <h1 class="form-titulo">Resultado</h1><br>
            <?php
                $peso = $_POST["peso"];
                $altura = $_POST["altura"];
                $estadoNutricional = "";
                $resoluçao = "";
                
                if($peso < 0)
                   echo "ERRO. Peso inválido!<br>";

                elseif($altura < 0)
                   echo "ERRO. Peso inválido!<br>";
                   
                else {
                    $imc = $peso / ($altura * $altura);
                    ?>
                    <h1>O IMC calculado foi<span id="cor"><?php echo number_format($imc, 2) ?></span></h1><br> 
                    <?php
                }   

                if($imc < 10.0) 
                    $estadoNutricional = "Desnutrição Grau III</br><br> Esse grau de desnutrição é Alarmante,grave, 
                    procure um nustricionista com urgência.";
                    elseif ($imc <= 16.9) 
                        $estadoNutricional = "Desnutrição Grau II</br><br> Esse grau de desnutrição já é
                        Moderado, necessario procurar um nustricionista."; 
                    elseif ($imc <= 18.4) 
                        $estadoNutricional = "Desnutrição Grau I</br><br> Esse grau de desnutrição é Leve, 
                        porém se possível procure um nustricionista.";
                    elseif ($imc <= 24.9) 
                        $estadoNutricional = "Normal</br><br> Parabéns, planos de musculação, GAP e um bom nutrícionista 
                        farão você melhorar ainda mais.";
                    elseif ($imc <= 29.9) 
                        $estadoNutricional = "Pré-obesidade</br><br> Tome cuidado com seu peso, está perto da obesidade
                        recomendamos planos leves como pilates ou musculação.";
                    elseif ($imc <= 34.5) 
                        $estadoNutricional = "Obesidade Grau I</br><br> Estágio inicial da Obesidade, recomendamos planos
                        como musculação ou GAP, jiu-jistu também é uma boa. Procure um nutricionista. ";
                    elseif ($imc <= 39.9) 
                        $estadoNutricional = "Obesidade Grau II</br><br> Estagio secundario da Obesidade, procure um 
                        nutricionista e torne a pratica de atividades uma rotina. GAP ou Musculção são necessarios.";
                    else
                        $estadoNutricional = "Obesidade Grau III</br><br> Estagio grave de Obesidade, Atividade fisica 
                        e controle alimentar são essenciais, procure-os com urgência.";    
            ?>

            <h1>O seu estado nutricional corresponde a(ao)<span id="cor"><?php echo $estadoNutricional ?></span></h1><br>
            <h2>  Caso queira agendar uma consulta, recomendamos a nutricionista Camilla Moura, <br>
            abaixo estão as redes sociais para contato com a mesma.</h2><br>

            <div style="flex-direction: row; text-align: center;">
                <a href="https://api.whatsapp.com/send?phone=5524999998045"><img src="img/images_form/zap.png" width="6%" /></a>
                <a href="https://www.instagram.com/nutricamillamoura/"><img src="img/images_form/insta.png" width="6%"/></a>
           </div><br>
            <a href="calcular-imc.php"><button type="submit" class="botao">Calcular Denovo!</button></a><br>
            <a href="index.php"><button href="calcular-imc.php" type="submit" class="botao">Voltar para a Home</button></a><br>

        </article>
    </section>

</body>
</html>
