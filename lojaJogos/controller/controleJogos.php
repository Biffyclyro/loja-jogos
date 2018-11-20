<?php 
	include 'crudJogos.php';
	
	include 'modal.php';

	$opcao=$_POST["opcao"];

	if($opcao=="Cadastrar"){
		$nome=$_POST["nome"];
		$preco=$_POST["preco"];
		$produtora=$_POST["produtora"];
		cadastrarJogo($nome, $preco, $produtora);
		header("Location: ../view/cadastrarProduto.php");

	}else if($opcao=="Alterar"){
		$nome=$_POST["nome"];
		$preco=$_POST["preco"];
		$produtora=$_POST["produtora"];
		$codigo=$_POST["id"];
		editarJogo($codigo, $nome, $produtora, $preco);
		header("Location: ../view/visualizarProdutoFuncionario.php");
	}else if($opcao=="Excluir"){
		$codigo=$_POST["id"];
		modalDesejaExcluir($codigo);

	}else if($opcao=="ExcluirSim"){

		$codigo=$_POST["id"];
		excluirJogo($codigo);
		
		$_SESSION['mensagem']='Jogo excluido com sucesso';
		$_SESSION['local']='../view/visualizarProdutoFuncionario.php';
		modalConfirmacao();	


	}




?>