<?php 
	$conexao;

	function conectar(){
		global $conexao;
	 	$conexao=mysqli_connect('localhost', 'root', '', 'loja-jogos') or die(mysqli_connect_error());
	}

	function query($sql){
		global $conexao;
		mysqli_query($conexao, "SET CHARSET SET utf8");
		$query = mysqli_query($conexao, $sql) or die(mysqli_connect_error());
		return $query;
	}

	function fechar(){
		global $conexao;
		mysqli_close($conexao);
	}




?>