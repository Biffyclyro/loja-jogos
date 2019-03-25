<!doctype html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="../img/icone.png">
    <title>Feirão de Jogos</title>
  </head>
  <body>



    <?php 
  
        session_start();
        if (isset($_SESSION['nome'])){
          $nome = $_SESSION['nome'];
          
        }else{
					header("Location: login.php");
				}
    ?>
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="../index.php"><img src="../img/iconeBranco.png" width="30" height="30" alt="">Saldão de Jogos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">


          <li class="nav-item active ">
            <a class="nav-link" href="visualizarProdutoFuncionario.php">Produtos<span class="sr-only">(página atual)</span></a>
          </li>
          
          <li class="nav-item active btn-info" >
            <a class="nav-link" href="cadastrar.php">Cadastrar produto<span class="sr-only">(página atual)</span></a>
          </li>

          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Bem vindo <?php echo $nome; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../controller/controleUsuario.php?opcao=Sair">Logout</a>
              
            </div>
          </li>  
          
          
        </ul>
      </div>
    </nav>
  <br/>
  <br/>
  <div class="p-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">
            <b>Editar</b>
          </h1>
          <?php 
            include '../controller/crudJogos.php';
            
            $resultado=consultarJogo($_GET['codigo']);
            if($resultado){
              while ($linha=mysqli_fetch_assoc($resultado)) {
                
                  $nomeJogo=$linha['nome_jogo'];
                  $produtora=$linha['produtora'];
                  $preco=$linha['preco'];
                  $codigo=$linha['cod_jogo'];

              }
            }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form class="" method="post" action="../controller/controleJogos.php">
            <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" id="nome" name="nome"  value="<?php echo $nomeJogo; ?>"> </div>
            <div class="form-group">
              <label for="produtora">Produtora:</label>
              <input type="text" class="form-control"  id="produtora" name="produtora" value="<?php echo $produtora; ?>"> </div>
              
              <div class="form-group">
              <label for="preco">Preço:</label>
              <input type="text" class="form-control"  id="preco" name="preco" value="<?php echo $preco; ?>"> </div>



              <input type="hidden" name="id" value="<?php echo $codigo; ?>">



              <button type="submit" class="btn btn-primary" name="opcao" value="Alterar">Atualizar</button>
              <button type="submit" class="btn btn-danger" name="opcao" value="Excluir">Excluir</button>         
               <a class="btn btn-light" href="visualizarProdutoFuncionario.php">Cancelar</a>
          </form>
        </div>
      </div>
    </div>

</body>
</html>