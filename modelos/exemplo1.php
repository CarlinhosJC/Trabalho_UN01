<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modelo 01</title>
    <link rel="stylesheet" href="css/exemplo1.css">
</head>
<body>
    <main>
        <div class="lateral">
        <section class="perfil">
            <img src="<?= $dados['foto']; ?>" alt="Foto" class="foto">
            <h1><?= $dados['nome']; ?></h1>
            <div class="dados-usuario">
                <ul>
                    <li><img src="imagens/email.png" alt="Icone email" height="20" width="20"><?= $dados['email']; ?></li>
                    <li><img src="imagens/telefone.png" alt="Icone telefone" height="20" width="20"><?= $dados['telefone']; ?></li>
                    <li>Nasceu:<?= $dados['dia']; ?>/<?= $dados['mes']; ?>/<?= $dados['ano']; ?></li>
                    <li><?= $dados['cargo']; ?></li>
                </ul>
            </div>
        </section>
        </div>
        <div class="resto">
        <section class="local">
        <h2><img src="imagens/endereco.png" alt="Icone endereço" height="20" width="20">Endereço</h2>        
            <div class="dados-usuario">
                <ul>
                    <li><?= $dados['endereco']; ?>,<?= $dados['numero']; ?></li>
                    <li><?= $dados['cidade']; ?></li>
                    <li><?= $dados['estado']; ?></li>
                </ul>
            </div>
        </section>

        <section class="objetivo">
            <h2><img src="imagens/objetivo.png" alt="Icone objetivo" height="20" width="20">Objetivos</h2>
            <div class="dados-usuario">
                <ul>
                    <li><?= $dados['objetivo']; ?></li>
                </ul>
            </div>
        </section>

        <section class="form-exp">
            <?php if($dados['formacoes']) { ?>
                <h2><img src="imagens/formacao.png" alt="Icone formação" height="20" width="20">Formação</h2>

                <ul class="lista-topicos">
                    <?php for($i = 0; $i < sizeof($dados['formacoes']['cursos']); $i++) { ?>
                        <li class="dados-usuario">
                            <div>
                                <h4>---<?= $dados['formacoes']['cursos'][$i] ?>---</h4>
                                <p><?= $dados['formacoes']['instituicoes'][$i] ?></p>
                                <p><?= $dados['formacoes']['conclusoes'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            
            <?php if($dados['experiencias']) { ?>
                <h2><img src="imagens/experiencia.png" alt="Icone experiencia" height="20" width="20">Experiência</h2>

                <ul class="lista-topicos">
                    <?php for($i = 0; $i < sizeof($dados['experiencias']['cargos']); $i++) { ?>
                        <li class="dados-usuario">
                            <div>
                                <h4>---<?= $dados['experiencias']['cargos'][$i] ?>---</h4>
                                <p><?= $dados['experiencias']['empresas'][$i] ?></p>
                                <p><?= $dados['experiencias']['inicios'][$i] ?> a <?= $dados['experiencias']['fins'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </section>
        </div>
    </main>
</body>
</html>