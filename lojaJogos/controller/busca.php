<?php
	include 'crudJogos.php';
	$pesquisa=$_POST["palavra"];
	if($pesquisa=="tudo"){
		$resultado=consultarTodosItensFuncionario();
	}else{
		$resultado=mostrarJogoPesquisa($pesquisa);
	}
	if(mysqli_num_rows($resultado)<=0){
		echo 'Nenhum jogo/produtora encontrado';
	}else{
		while ($linha=mysqli_fetch_assoc($resultado)) {
            $nome=$linha['nome_jogo'];
            $produtora=$linha['produtora'];
            $preco=$linha['preco'];
            $codigo=$linha['cod_jogo'];
            echo "
              <tr>
                <td>$nome</td>
                <td>$produtora</td>
                <td>$preco</td>
                <td><a class='btn btn-primary' href='editarProduto.php?opcao=Alterar&codigo=$codigo'>Editar</a></td>
              </tr>  
            ";
		}
	}
?>