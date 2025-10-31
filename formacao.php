<?php
session_start();
$_SESSION['dados'] = $_POST;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formação Acadêmica</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>

<header>
    <h1>Formação Acadêmica</h1>
</header>

<main>
    <form action="visualizar.php" method="post">
        <h2>Etapa 3 – Formação Acadêmica</h2>

        <div id="formacoes">
            <div class="formacao">
                <label>Curso:</label>
                <input type="text" name="curso[]">
                <label>Instituição:</label>
                <input type="text" name="instituicao[]">
                <label>Ano de conclusão:</label>
                <input type="text" name="ano[]">
                <button type="button" class="remover">Remover</button>
            </div>
        </div>

        <button type="button" id="addFormacao">+ Adicionar curso</button>
        <br><br>
        <button type="submit">Próximo – Visualizar Currículo</button>
    </form>
</main>

</body>
</html>
