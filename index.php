<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script type="text/javascript" src="js/index.js"></script>
	
</head>
<body>
	<img src="imagens/cabecalho.png">
    
    <main class="container" style="margin-top:30px">
        <form action="curriculos.php" method="post" target="_blank" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                	<div class="card-body">
                    <h4 class="card-title">Modelos de currículo</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="modelo" id="exemplo1" value="exemplo1" checked> Exemplo 1
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input class="form-check-input" type="radio" name="modelo" id="exemplo2" value="exemplo2"> Exemplo 2
                                </label>
                            </div>
                        </div>                        
                    </div>
                </div>
                    <h4 class="card-title">Informações gerais</h4>
					
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="row">
                    	<div class="col">
                    		<div class="form-group">                    			
                    			<label for="nascimento">Nascimento</label>
                    			<div class="form-control">
                    			<input type="text" name="dia" id="dia" size="2" maxlength="2" value="dd"> 
								<input type="text" name="mes" id="mes" size="2" maxlength="2" value="mm"> 
								<input type="text" name="ano" id="ano" size="4" maxlength="4" value="aaaa">	
								</div>						
                    		</div>
                    	</div>
                    	<div class="col">
                    		<div class="form-group">
                    			<label for="cidade">Cidade</label>
                    			<input type="text" class="form-control" name="cidade" id="cidade">
                    		</div>
                    	</div>
                    	<div class="col">
                    		<div class="form-group">
                    			<label for="estado">Estado:</label>
                    			<select class="form-control" name="estado"> 
							    <option value="ac">Acre</option> 
							    <option value="al">Alagoas</option> 
							    <option value="am">Amazonas</option> 
							    <option value="ap">Amapá</option> 
							    <option value="ba">Bahia</option> 
							    <option value="ce">Ceará</option> 
							    <option value="df">Distrito Federal</option> 
							    <option value="es">Espírito Santo</option> 
							    <option value="go">Goiás</option> 
							    <option value="ma">Maranhão</option> 
							    <option value="mt">Mato Grosso</option> 
							    <option value="ms">Mato Grosso do Sul</option> 
							    <option value="mg">Minas Gerais</option> 
							    <option value="pa">Pará</option> 
							    <option value="pb">Paraíba</option> 
							    <option value="pr">Paraná</option> 
							    <option value="pe">Pernambuco</option> 
							    <option value="pi">Piauí</option> 
							    <option value="rj">Rio de Janeiro</option> 
							    <option value="rn">Rio Grande do Norte</option> 
							    <option value="ro">Rondônia</option> 
							    <option value="rs">Rio Grande do Sul</option> 
							    <option value="rr">Roraima</option> 
							    <option value="sc">Santa Catarina</option> 
							    <option value="se">Sergipe</option> 
							    <option value="sp">São Paulo</option> 
							    <option value="to">Tocantins</option> 
							   </select>
                    		</div>
                    	</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cargo">Cargo pretendido</label>
                                <input type="text" class="form-control" name="cargo" id="cargo">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col">
                    		<div class="form-group">
                        		<label for="endereco">Endereço</label>
                        		<input type="text" class="form-control" name="endereco" id="endereco">
                    		</div>
                    	</div>
                    	<div>
                    		<div>
                    			<label for="numero">Numero</label>
                    			<input type="text" class="form-control" name="numero" id="numero">
                    		</div>
                    	</div>
                    </div>	
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone">
                            </div>
                        </div> 
                        <div class="col">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="resumo">Objetivo</label>
                        <textarea class="form-control" name="resumo" id="resumo"></textarea>
                    </div>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Formação</h4>
                    <button class="btn-sm" id="btn-adicionar-formacao" title="Adicionar formação">Adicionar formação</button>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Experiência</h4>
                    <button class="btn-sm" id="btn-adicionar-experiencia" title="Adicionar experiência">Adicionar experiência</button>
                </div>

                
                
                <div class="card-footer">
                    <button class="btn-primary" type="submit">Gerar meu currículo</button>
                    <button class="btn-default" type="reset">Limpar campos</button>
                </div>
            </div>
        </form>
    </main>  
  
</body>
</html>
