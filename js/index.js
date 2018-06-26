$(function(){ 
		
		 $(document).ready(function(){
	     $("#adicionar-formacao").click(function(event){  //Função para quando clicar em adicionar... ele nao enviar o curriculo
	        event.preventDefault();
	    	});
		});    	

	var linha = '<div class="card">'+
	                    '    <div class="card-body">'+
	                    '        <div class="row">'+
	                    '            <div class="col-12 col-md-5">'+
	                    '                <input type="text" class="form-control" placeholder="Curso" name="formacao-curso[]">'+
	                    '            </div>'+
	                    '            <div class="col-12 col-md-5">'+
	                    '                <input type="text" class="form-control" placeholder="Instituição" name="formacao-instituicao[]">'+
	                    '            </div>'+
	                    '            <div class="col-12 col-md">'+
	                    '                <input type="text" class="form-control" placeholder="Conclusão" title="Ano de conclusão" name="formacao-conclusao[]">'+
	                    '            </div>'+
	                    '            <div class="col-12 col-md">'+
	                    '                <button type="button" class="form-control remover-item" title="Remover formação">&times;</button>'+
	                    '            </div>'+
	                    '        </div>'+
	                    '    </div>'+
	                    '</div>';

	
	$(document).ready(function(){    
     $("#adicionar-formacao").click(function(){  //Função para quando clicar adicionar a formação
        $("#div-formacoes").append(linha);
    	});
    });


    $(document).ready(function(){
	     $("#adicionar-experiencia").click(function(event){   //Função para quando clicar em adicionar... ele nao enviar o curriculo
	        event.preventDefault();
	     });
	});

	var linha2 = '<div class="card">'+
	                    '    <div class="card-body">'+
	                    '        <div class="row">'+
	                    '            <div class="col-12 col-md-4">'+
	                    '                <input type="text" class="form-control" placeholder="Cargo" name="experiencia-cargo[]">'+
	                    '            </div>'+
	                    '            <div class="col-12 col-md-3">'+
	                    '                <input type="text" class="form-control" placeholder="Empresa" name="experiencia-empresa[]">'+
	                    '            </div>'+
	                    '            <div class="col-6 col-md-2">'+
	                    '                <input type="text" class="form-control" placeholder="Início" name="experiencia-inicio[]">'+
	                    '            </div>'+
	                    '            <div class="col-6 col-md-2">'+
	                    '                <input type="text" class="form-control" placeholder="Fim" name="experiencia-fim[]">'+
	                    '            </div>'+
	                    '            <div class="col col-md">'+
	                    '                <button type="button" class="form-control remover-item" title="Remover experiência">&times;</button>'+
	                    '            </div>'+
	                    '        </div>'+
	                    '    </div>'+
	                    '</div>';  
	
	$(document).ready(function(){    
     $("#adicionar-experiencia").click(function(){  //Função para quando clicar adicionar a experiencia
        $("#div-experiencias").append(linha2);
    	});
    });
    

	$("#div-formacoes, #div-experiencias").on("click", ".remover-item", function(){  
	        $(this).parent().parent().parent().parent().remove();
	    })   //para quando remover formações e experiencias clicando em remover
});                         