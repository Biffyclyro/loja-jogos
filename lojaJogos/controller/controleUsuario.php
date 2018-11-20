<?php 
	include 'crudUsuario.php';

	if(isset($_POST["opcao"])){
		$opcao = $_POST["opcao"];

		if($opcao == 'Cadastrar'){
			$nome = $_POST["nome"];
			$senha = sha1($_POST["senha"]);
			$tipo = $_POST["tipo"];
			cadastrarUsuario($nome, $senha, $tipo);
			header("Location: ../view/login.php");

		}else if($opcao == "Entrar"){
			$nome = $_POST["nome"];
			$senha = sha1($_POST["senha"]);
			$nomeBanco = "null";
			$senhaBanco = "null";
			$tipoBanco = "null";
			$resultado = buscarUsuario($nome);

			while($linha=mysqli_fetch_assoc($resultado)){
				$nomeBanco = $linha['nome_usuario'];
				$senhaBanco = $linha['senha'];
				$tipoBanco = $linha['tipo'];
				$codUsuario = $linha['cod_usuario'];
			}

			if($nome == $nomeBanco){
				if($senha == $senhaBanco){
					if($tipoBanco == 'funcionario'){
						session_start();
						$_SESSION['nome'] = $nomeBanco;
						header("Location: ../view/visualizarProdutoFuncionario.php");
					}else if($tipoBanco == 'cliente'){
						session_start();
						$_SESSION['nome'] = $nomeBanco;
						$_SESSION['usuario'] = $codUsuario;
						header("Location: ../view/paginaInicial.php");
					}
					


				}else{
					echo "<script>alert('Senha ou Nome Incorreto!');</script>";
					echo "<script>window.location = '../view/login.php';</script>";
				}
			}else{
					echo "<script>alert('Senha ou Nome Incorreto!');</script>";
					echo "<script>window.location = '../view/login.php';</script>";
				}


		}
	}elseif(isset($_GET["opcao"])){
		$opcao=$_GET["opcao"];
		if($opcao=='Sair'){
			session_start();
			session_destroy();
			header("Location: ../view/login.php");
		}	
	}


?>