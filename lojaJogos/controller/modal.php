<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
  <link rel="shortcut icon" type="image/x-icon" href="../img/icone.png">
</head>

<body>
	<?php 
		function modalConfirmacao(){
	?>

		<div class="modal" tabindex="-1" role="dialog" id="telaModal" data-backdrop=static>
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title"><?php echo $_SESSION['mensagem']; ?></h5>		        
		      
		      <div class="modal-footer">		       
		        <a  class="btn btn-primary" href="<?php echo $_SESSION['local']; ?>">Ok</a>
		      </div>
		    </div>
		  </div>
		</div>

		<script> $('#telaModal').modal('show') </script>

	<?php 
		}
		function modalDesejaExcluir($codigo){
	?>


		<div class="modal" tabindex="-1" role="dialog" id="telaModalExcluir" data-backdrop=static>
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Deseja realmente excluir?</h5>		        
		      </div>
		      <div class="modal-footer">
		      	<form method="post" action="controleJogos.php">
		      		<input type="hidden" name="id" value="<?php echo $codigo; ?>" >		       
		        	<button type="submit" class="btn btn-danger" name="opcao" value="ExcluirSim">Sim</button>
		        	<a class='btn btn-primary' href='editarFuncionario.php?codigo=<?php echo $codigo; ?>'>Não</a>
		    	</form>
		      </div>
		    </div>
		  </div>
		</div>

		<script> $('#telaModalExcluir').modal('show') </script>

	<?php 
		}
	?>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>