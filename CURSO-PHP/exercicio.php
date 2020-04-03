<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>Exercício</title>
</head>
<nav class="navegacao">
    <a href="#" class="verde">Sem formatação</a>
    <a href="index.php" class="vermelho">Voltar</a>
</nav>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    
    <main class="principal">
        <div class="conteudo">
            <?php
                /* include($_GET['dir'] . "/" . $_GET['file'] . ".php"); */
                // __DIR__ variavel que serve para ir buscar o caminho absoluto
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); // mais simples
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS &copy; <?= date('Y'); ?>
    </footer>
</body>

</html>