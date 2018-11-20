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
          
        }
    ?>
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="visualizarProdutoFuncionario.php"><img src="../img/iconeBranco.png" width="30" height="30" alt="">Saldão de Jogos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">

          

          <li class="nav-item active btn-info">
            <a class="nav-link" href="visualizarProdutoFuncionario.php">Produtos<span class="sr-only">(página atual)</span></a>
          </li>

          <li class="nav-item active ">
            <a class="nav-link" href="cadastrarProduto.php">Cadastrar produto</a>
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

    <br>
    <br>


  <div class="p-1">
    <div class="container">

      <form class="">
        <h1 class="">
          <b>Visualizar e Pesquisar</b>
        </h1>
        <div class="form-group">
          <label for="pesquisa">Pesquisar:</label>
          <input type="text" class="form-control" name="pesquisa" id="pesquisa" placeholder="Digite o nome produtora"> </div>
      </form>



      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Produtora</th>
            <th scope="col">Preço</th>
            
          </tr>
        </thead>
        <tbody class="table-results">
          <?php 

            include '../controller/crudJogos.php';

            $resposta = consultarTodosItensFuncionario();

            if($resposta){
              while ($linha=mysqli_fetch_assoc($resposta)) {
                $nomeJogo = $linha['nome_jogo'];
                $produtora = $linha['produtora'];
                $preco = $linha['preco'];
                $codigo = $linha['cod_jogo'];

                 echo "
                  <form method='post' action='../controller/controleVendas.php'>
                    <tr>
                      <th scope='row'>$nomeJogo</th>
                      <td>$produtora</td>
                      <td>$preco</td>
                      <td><a class='btn btn-primary' href='editarProduto.php?opcao=Alterar&codigo=$codigo'>Editar</a></td>
                    </tr>
                  </form>
                ";

                
              }
            }

           



          ?> 

      
  

          
        </tbody>
      </table>
    </div>
  </div>









    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/javascriptPesquisar.js"></script>
  </body>
</html>