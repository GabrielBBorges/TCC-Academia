<?php
	namespace controle;
	session_start();
	include 'processaAcesso.php';
	use processaAcesso as processaAcesso;
	$controle = new \processaAcesso\ProcessaAcesso;

	if($_POST['acao'] == "Entrar") { 
	    $email = $_POST['txtEmail']; 
	    $senha = $_POST['txtSenha'];
	    $usuario = $controle->verificaAcesso($email, $senha);

	    if ($usuario) {
	    	if($usuario['id_tipo_usuario'] == 1) { 
	    		$_SESSION["login_id_user"] = $usuario['id_tipo_usuario'];
	    		$_SESSION["login_matric"] = $usuario['cli_matric'];
	    		$_SESSION["login_nome"] = $usuario['cli_nome'];
	    		$_SESSION["login_email"] = $usuario['cli_email'];
	    		$_SESSION["login_endereco"] = $usuario['cli_endereco'];
	    		$_SESSION["login_tel"] = $usuario['cli_tel'];
				header("Location:arearestrita.php"); 

			} else if($usuario['id_tipo_usuario'] == 2) { 
				$_SESSION["login_id_user"] = $usuario['id_tipo_usuario'];
	    		$_SESSION["login_matric"] = $usuario['cli_matric'];
				header("Location:admin.php"); 
			}
	    } else {
	    	header("Location:login.php?carga=1");
	    }

	} else if($_POST['acao'] == "Cadastrar") { 
	    $nome = $_POST["txtName"];
		$email = $_POST["txtEmail"]; 
		$senha = $_POST["txtSenha"];
		$endereco = $_POST["txtEnd"];
		$tel = $_POST["txtTel"];

		$tipo_usuario = $_POST["tipo_usuario"];

		$plano = $_POST["select"];
		$planoPreco = $_POST["selectPreco"];


		/*$cartaoNum = $_POST["nome-cartao"];
		$cartaoTitular = $_POST["titular-nome"];
		$cartaoVenc = $_POST["venc-cartao"];
		$cartaoCVV = $_POST["cvv-cartao"];*/

	    $arr = array('cli_nome' => $nome, 'cli_email' => $email, 'cli_senha' => $senha, 'cli_endereco' => $endereco, 'cli_tel' => $tel, 'id_tipo_usuario' => $tipo_usuario); 

	    if(!$controle->cadastraUsuario($arr)) {
	        echo 'Aconteceu algum erro';
	    } else {
	        $tipo_acesso = $controle->verificaAcesso($email, $senha);

	        if ($_POST['gerenciar_aluno']) {
	        	header("Location:controle_aluno.php"); 	
	        } else {
		        if($tipo_acesso['id_tipo_usuario'] == 1) {
	        		header("Location:matriculaconcluida.php"); 	
	        	} else if($tipo_acesso['id_tipo_usuario'] == 2) {
	            	header("Location:controle_aluno.php");
	        	}
	        }
	    }

	} else if ($_POST['acao'] == "Deletar") {
		$matric = $_POST['cli_matric'];
		$usuario = $controle->deletarUsuario($matric);
		//var_dump($usuario);
		header("Location:controle_aluno.php"); 

	} else if ($_POST['acao'] == "Atualizar") {
		$matric = $_POST['cli_matric'];
	    $nome = $_POST["txtName"];
		$email = $_POST["txtEmail"]; 
		$senha = $_POST["txtSenha"];
		$endereco = $_POST["txtEnd"];
		$tel = $_POST["txtTel"];

		$tipo_usuario = $_POST["tipo_usuario"];

	    if(!$controle->atualizarUsuario($matric, $nome, $email, $senha, $endereco, $tel, $tipo_usuario)) {
	        echo 'Aconteceu algum erro';
	    } else {
	        $usuario = $controle->SelectID($matric);

	        header("Location:controle_aluno.php"); 
	    }

	} else if ($_POST['acao'] == "CadastrarPlano") {
		$codPlano = $_POST['tdp_cod'];
		$nomePlano = $_POST['nomePlano'];
		$valorPlano = $_POST['valorPlano'];
		$caractPlano = $_POST['caractPlano'];

		$arr = array('tdp_nome' => $nomePlano, 'tdp_valor' => $valorPlano, 'tdp_caract' => $caractPlano);

	    if(!$controle->cadastraPlano($arr)) {
	        echo 'Aconteceu algum erro';
	    } else {
	        header("Location:gerenciar_planos.php"); 	
	    }
	} else if ($_POST['acao'] == "DeletarPlano") {
		$codPlano = $_POST['tdp_cod'];
		$plano = $controle->deletarPlano($codPlano);
		//var_dump($usuario);
		header("Location:gerenciar_planos.php"); 

	} elseif ($_POST['acao'] == "AtualizarPlano") {
		$codPlano = $_POST['tdp_cod'];
		$nomePlano = $_POST['nomePlano'];
		$valorPlano = $_POST['valorPlano'];
		$caractPlano = $_POST['caractPlano'];

	    if(!$controle->atualizarPlano($codPlano, $nomePlano, $valorPlano, $caractPlano)) {
	        echo 'Aconteceu algum erro';
	    } else {
	        $plano = $controle->SelectIDPlano($codPlano);

	        header("Location:gerenciar_planos.php"); 
	    }

	} else if ($_POST['acao'] == "CadastrarModal") {
		$codModal = $_POST['mod_cod'];
		$nomeModal = $_POST['nomeModal'];
		$valorModal = $_POST['valorModal'];
		$caractModal = $_POST['caractModal'];

		$arr = array('mod_nome' => $nomeModal, 'mod_valor' => $valorModal, 'mod_caract' => $caractModal);

	    if(!$controle->cadastraModal($arr)) {
	        echo 'Aconteceu algum erro';
	    } else {
	        header("Location:gerenciar_modal.php"); 	
	    }
	} else if ($_POST['acao'] == "DeletarModal") {
		$codModal = $_POST['mod_cod'];
		$modalidade = $controle->deletarModal($codModal);
		header("Location:gerenciar_modal.php"); 

	} elseif ($_POST['acao'] == "AtualizarModal") {
		$codModal = $_POST['mod_cod'];
		$nomeModal = $_POST['nomeModal'];
		$valorModal = $_POST['valorModal'];
		$caractModal = $_POST['caractModal'];

	    if(!$controle->atualizarModal($codModal, $nomeModal, $valorModal, $caractModal)) {
	        echo 'Aconteceu algum erro';
	    } else {
	        $modalidade = $controle->SelectIDModal($codModal);

	        header("Location:gerenciar_modal.php"); 
	    }
	}
?>