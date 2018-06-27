<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modelo 01</title>
    <link rel="stylesheet" href="css/exemplo1.css">
</head>
<body>
    <main>
        <section class="perfil">
            <img src="<?= $dados['foto']; ?>" alt="Foto" class="foto">
            <h1><?= $dados['nome']; ?></h1>
            <div>
                <ul>
                    <li><?= $dados['email']; ?></li>
                    <li><?= $dados['telefone']; ?></li>
                    <li>Nasceu:<?= $dados['dia']; ?>/<?= $dados['mes']; ?>/<?= $dados['ano']; ?></li>
                    <li><?= $dados['cargo']; ?></li>
                </ul>
            </div>
        </section>
        
        <section class="local">        
            <div>
                <ul>
                    <li><?= $dados['endereco']; ?>,<?= $dados['numero']; ?></li>
                    <li><?= $dados['cidade']; ?></li>
                    <li><?= $dados['estado']; ?></li>
                </ul>
            </div>
        </section>

        <section class="objetivo">
            <h2>Objetivos</h2>
            <div>
                <ul>
                    <li><?= $dados['objetivo']; ?></li>
                </ul>
            </div>
        </section>

        <section>
            <?php if($dados['formacoes']) { ?>
                <h2>Formação</h2>

                <ul class="lista-topicos">
                    <?php for($i = 0; $i < sizeof($dados['formacoes']['cursos']); $i++) { ?>
                        <li>
                            <div>
                                <h4><?= $dados['formacoes']['cursos'][$i] ?></h4>
                                <p><?= $dados['formacoes']['instituicoes'][$i] ?></p>
                                <p><?= $dados['formacoes']['conclusoes'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            
            <?php if($dados['experiencias']) { ?>
                <h2>Experiência</h2>

                <ul class="lista-topicos">
                    <?php for($i = 0; $i < sizeof($dados['experiencias']['cargos']); $i++) { ?>
                        <li>
                            <div>
                                <h4><?= $dados['experiencias']['cargos'][$i] ?></h4>
                                <p><?= $dados['experiencias']['empresas'][$i] ?></p>
                                <p><?= $dados['experiencias']['inicios'][$i] ?> a <?= $dados['experiencias']['fins'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </section>

    </main>
</body>
</html>