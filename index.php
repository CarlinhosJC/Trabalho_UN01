<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> <link rel="stylesheet" href="css/efeito-hover-index.css">   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
	
</head>
<body style="background-color: #E0FFFF">
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
                                    <input class="form-check-input" type="radio" name="exemplo" id="exemplo1" value="exemplo1" checked><img src="imagens/modelo-moderno.png" alt="Modelo 01" width="300" height="200"> Exemplo 1 | Moderno
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="exemplo" id="exemplo2" value="exemplo2"><img src="imagens/modelo-simples.png" alt="Modelo 02" width="300" height="200"> Exemplo 2 | Simples
                                </label>
                            </div>
                        </div>                        
                    </div>
                </div>
                    <h4 class="card-title">Informações gerais</h4>

					<div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <select class="form-control" name="sexo" id="sexo">
                            <option value="homem">Masculino</option>
                            <option value="mulher">Femenino</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col">
                    		<div class="form-group">                    			
                    			<label for="nascimento">Nascimento</label>
                    			<div class="form-control">
                    			<input type="text" name="dia" id="dia" size="2" maxlength="2" placeholder="dd" required> 
								<input type="text" name="mes" id="mes" size="2" maxlength="2" placeholder="mm" required> 
								<input type="text" name="ano" id="ano" size="4" maxlength="4" placeholder="aaaa" required>	
								</div>						
                    		</div>
                    	</div>
                    	<div class="col">
                    		<div class="form-group">
                    			<label for="cidade">Cidade</label>
                    			<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade onde mora" required>
                    		</div>
                    	</div>
                    	<div class="col">
                    		<div class="form-group">
                    			<label for="estado">Estado:</label>
                    			<select class="form-control" name="estado" id="estado"> 
							    <option value="Acre">Acre</option> 
							    <option value="Alagoas">Alagoas</option> 
							    <option value="Amazonas">Amazonas</option> 
							    <option value="Amapá">Amapá</option> 
							    <option value="Bahia">Bahia</option> 
							    <option value="Ceará">Ceará</option> 
							    <option value="DF">Distrito Federal</option> 
							    <option value="Espírito Santo">Espírito Santo</option> 
							    <option value="Goiás">Goiás</option> 
							    <option value="Maranhão">Maranhão</option> 
							    <option value="Mato Grosso">Mato Grosso</option> 
							    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option> 
							    <option value="Minas Gerais">Minas Gerais</option> 
							    <option value="Pará">Pará</option> 
							    <option value="Paraíba">Paraíba</option> 
							    <option value="Paraná">Paraná</option> 
							    <option value="Pernambuco">Pernambuco</option> 
							    <option value="Piauí">Piauí</option> 
							    <option value="Rio de Janeiro">Rio de Janeiro</option> 
							    <option value="Rio Grande do Norte">Rio Grande do Norte</option> 
							    <option value="Rondônia">Rondônia</option> 
							    <option value="Rio Grande do Sul">Rio Grande do Sul</option> 
							    <option value="Roraima">Roraima</option> 
							    <option value="Santa Catarina">Santa Catarina</option> 
							    <option value="Sergipe">Sergipe</option> 
							    <option value="São Paulo">São Paulo</option> 
							    <option value="Tocantins">Tocantins</option> 
							   </select>
                    		</div>
                    	</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cargo">Cargo pretendido</label>
                                <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Ou deixe em branco!">
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
                        		<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua onde mora" required>
                    		</div>
                    	</div>
                    	<div>
                    		<div>
                    			<label for="numero">Numero</label>
                    			<input type="text" class="form-control" name="numero" id="numero" placeholder="Numero da casa/apartamento etc" required>
                    		</div>
                    	</div>
                    </div>	
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone para contato" required>
                            </div>
                        </div> 
                        <div class="col">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail para contato" required>
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="objetivo">Objetivo</label>
                        <textarea class="form-control" name="objetivo" id="objetivo" placeholder="Fale sobre você e seu objetivo dentro da empresa" required></textarea>
                    </div>
                </div>

                <div class="card-body" id="div-formacoes">
                    <h4 class="card-title">Formação</h4>
                    <button class="btn-sm" id="adicionar-formacao" title="Adicionar formação">Adicionar formação</button>
                </div>

                <div class="card-body" id="div-experiencias">
                    <h4 class="card-title">Experiência</h4>
                    <button class="btn-sm" id="adicionar-experiencia" title="Adicionar experiência">Adicionar experiência</button>
                </div>                
                
                <div class="card-footer">
                    <button class="btn-primary" type="submit">Gerar meu currículo</button>
                    <button class="btn-secondary" type="reset">Limpar dados</button>
                </div>
            </div>
        </form>
    </main> 
    <footer>
       <p style="text-align: center;">Copyright © 2018 | José Carlos C. Neto</p>
    </footer>
</body>
</html>
