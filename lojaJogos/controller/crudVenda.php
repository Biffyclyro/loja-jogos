<?php 
	include '../model/conexaoBD.php';


	function novaVenda($codigo, $usuario){
		conectar();
		query("INSERT INTO venda(cod_prod, cod_us) VALUES($codigo, $usuario)");
		fechar();
	}

	function excluiProduto($codigo){
		conectar();
		query("DELETE FROM venda WHERE $codigo = cod_prod");
		fechar();
	}

	function consultaCarrinho(){
		conectar();
		$resposta=query("SELECT * FROM jogos, venda WHERE jogos.cod_jogo = venda.cod_prod");
		fechar();
		return $resposta;
	}




?>