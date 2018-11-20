$(function(){
	
	$('#pesquisa').keyup(function(){ 
		
		var pesquisa = $(this).val() 
		if(pesquisa != ''){ 
			var dados = { 
				palavra : pesquisa 
			}
			$.post('../controller/busca.php', dados, function(retorna){
				
				$(' .table-results ').html(retorna) 
			
			})
		}else{ 
		
			var dados = {
				palavra : "tudo"
			}
			$.post('../controller/busca.php',dados,function(retorna){
				$(' .table-results ').html(retorna);
			});
		}
	})
})