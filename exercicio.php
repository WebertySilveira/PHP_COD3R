<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Exercícios</title>
</head>

<body class="exercicio">


    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>



    <nav class="navegacao">
        <a href=
            <?php 
                echo("{$_GET['dir']}/{$_GET['file']}.php") 
            ?> 
            class="verde">Sem Formatação
        </a>

        <a href="index.php" class="vermelho">Voltar</a>
    </nav>



    <main class="principal">
        <div class="conteudo">

            <?php
                include($_GET['dir'] . "/" . $_GET['file'] . ".php");
            ?>

        </div>
    </main>



    <footer class="rodape">
        COD3R | WEBERTY SILVEIRA © <?php echo(date('Y')) ?>
    </footer>



</body>
</html>