<?php
//modelo que o usuario escolheu

$modelo = $_POST['modelo'];  

//foto do curriculo
if($_FILES['foto']['size'] > 0){
    
    $conteudo = file_get_contents($_FILES['foto']['tmp_name']);
    
    
    $tipo = pathinfo($_FILES['foto']['tmp_name'], PATHINFO_EXTENSION);
    
    
    $foto = 'data:image/' . $tipo . ';base64,' . base64_encode($conteudo);
} else {
    
    if ($_POST['sexo'] == 'homem') {
        $foto = "imagens/avatar-1.png";
    } else {
        $foto = "imagens/avatar-2.png";
    }
}


//dados do usuario
$dados = array(
    'foto' => $foto,
    'nome' => $_POST['nome'],
    'sexo' => $_POST['sexo'],
    'dia' => $_POST['dia'],
    'mes' => $_POST['mes'],
    'ano' => $_POST['ano'],
    'cidade' => $_POST['cidade'],
    'estado' => $_POST['estado'],
    'cargo' => $_POST['cargo'],
    'endereco' => $_POST['endereco'],
    'numero' => $_POST['numero'],
    'telefone' => $_POST['telefone'],
    'email' => $_POST['email'],
    'objetivo' => $_POST['objetivo'],
    'formacoes' => isset($_POST['formacao-curso']) ?
                   array(
                        'cursos' => $_POST['formacao-curso'],
                        'instituicoes' => $_POST['formacao-instituicao'],
                        'conclusoes' => $_POST['formacao-conclusao']
                    ) : null, 
    'experiencias' => isset($_POST['experiencia-cargo']) ? 
                      array(
                        'cargos' => $_POST['experiencia-cargo'],
                        'empresas' => $_POST['experiencia-empresa'],
                        'inicios' =>  $_POST['experiencia-inicio'],
                        'fins' =>  $_POST['experiencia-fim'],
                      ) : null 
);
