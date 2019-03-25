<?php 
	include '../model/conexaoBD.php';


	function cadastrarJogo($nome, $preco, $produtora){
		conectar();
		query("INSERT INTO jogos(nome_jogo, preco, produtora) VALUES('$nome', '$preco', '$produtora')");
		fechar();
	}


	function consultarJogo($cod){
		conectar();
		$resposta = query("SELECT * FROM jogos WHERE cod_jogo=$cod");
		fechar();
		return $resposta;

	}


	function editarJogo($cod, $nome, $produtora, $preco){

		conectar();
		query("UPDATE jogos SET nome_jogo='$nome', preco='$preco', produtora ='$produtora' WHERE cod_jogo=$cod");
		fechar();

	}

	function excluirJogo($cod){
		conectar();
		query("DELETE FROM venda WHERE cod_prod=$cod ");
		query("DELETE FROM jogos WHERE cod_jogo=$cod ");
		//query("DELETE FROM venda WHERE cod_prod=$cod ");
		fechar();
	}

	function consultarTodosItens(){
		conectar();
		$resposta = query("SELECT * FROM jogos WHERE cod_jogo NOT IN (SELECT cod_prod FROM venda)");
		fechar();
		return $resposta;
	}


	function consultarTodosItensFuncionario(){
		conectar();
		$resposta = query("SELECT * FROM jogos WHERE cod_jogo ");
		fechar();
		return $resposta;
	}


	function mostrarJogoPesquisa($pesquisa){
		conectar();
		$resultado=query("SELECT * FROM jogos WHERE nome_jogo LIKE '%$pesquisa%' OR produtora LIKE '%$pesquisa%'");
		fechar();
		return $resultado;
	}



?>