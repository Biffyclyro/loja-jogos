<?php 
  include '../model/crudVenda.php';

  $opcao=$_GET['opcao'];

  if($opcao=='Adicionar'){
    $codigo=$_GET['codigo'];
    $usuario=$_GET['usuario'];
    
    novaVenda($codigo, $usuario);
    header("Location: ../view/visualizarProduto.php");

  }else if($opcao=="Excluir"){
    $codigo=$_GET['codigo'];
    excluiProduto($codigo);
    header("Location: ../view/carrinho.php");
    
  }




?>