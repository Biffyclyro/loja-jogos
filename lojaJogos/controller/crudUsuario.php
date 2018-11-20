<?php 
	include '../model/conexaoBD.php';

	function buscarUsuario($usuario){
		conectar();
		$resposta = query("SELECT * FROM usuario WHERE usuario.nome_usuario = '$usuario'");
		fechar();
		return $resposta;
	}

	function cadastrarUsuario($usuario, $senha, $tipo){
		conectar();
		query("INSERT INTO usuario(nome_usuario, senha, tipo) VALUES ('$usuario', '$senha', '$tipo')");
		fechar();
	}



?>