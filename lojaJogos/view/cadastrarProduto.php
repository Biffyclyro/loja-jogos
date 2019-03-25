<!doctype html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="../img/icone.png">
    <title>Feirão de Jogos</title>
  </head>
  <body>



    <?php 
  
        session_start();
        if (isset($_SESSION['nome'])){
          $nome = $_SESSION['nome'];
         // $usuario = $_SESSION['usuario'];
        }else{
					header("Location: login.php");
				}
    ?>
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="visualizarProdutoFuncionario.php"><img src="../img/iconeBranco.png" width="30" height="30" alt="">Saldão de Jogos</a>
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



    <div class="container">
        <form method="post" action="../controller/controleJogos.php">
          <div class="form-group">
            <label for="nome">Nome do Jogo:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Entre com o nome do jogo">
            
          </div>
          <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço">
          </div>
          <div class="form-group">
            <label for="produtora">Produtora:</label>
            <input type="text" class="form-control" id="produtora" name="produtora" placeholder="Produtora">
          </div>

         

        <button type="submit" class="btn btn-primary" name="opcao" value="Cadastrar">Cadastar</button>
      </form>
    </div>










   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../js/jquery.maskedinput.js" type="text/javascript"></script>
<script src="../js/mascaras.js" type="text/javascript"></script>
  </body>
</html>