<?php
session_start();

// une os dados das etapas anteriores com os atuais
if (isset($_SESSION['dados'])) {
    $_POST = array_merge($_SESSION['dados'], $_POST);
    unset($_SESSION['dados']); // limpa sessão após o uso
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Currículo Pronto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Cabeçalho não será impresso -->
<header class="no-print">
    <h1>Seu Currículo Pronto</h1>
</header>

<main>
    <?php
    // Evita erros de chaves indefinidas
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $endereco = $_POST['endereco'] ?? '';
    ?>

    <h2><?= htmlspecialchars($nome) ?></h2>
    <p><strong>E-mail:</strong> <?= htmlspecialchars($email) ?></p>
    <p><strong>Telefone:</strong> <?= htmlspecialchars($telefone) ?></p>
    <p><strong>Endereço:</strong> <?= htmlspecialchars($endereco) ?></p>

    <hr>
    <h3>Experiências Profissionais</h3>
    <?php
    if (!empty($_POST['empresa'])) {
        for ($i = 0; $i < count($_POST['empresa']); $i++) {
            $empresa = htmlspecialchars($_POST['empresa'][$i] ?? '');
            $cargo = htmlspecialchars($_POST['cargo'][$i] ?? '');
            $periodo = htmlspecialchars($_POST['periodo'][$i] ?? '');
            $descricao = nl2br(htmlspecialchars($_POST['descricao'][$i] ?? ''));

            echo "<p><strong>$empresa</strong> – $cargo ($periodo)<br>$descricao</p>";
        }
    }
    ?>

    <hr>
    <h3>Formação Acadêmica</h3>
    <?php
    if (!empty($_POST['curso'])) {
        for ($i = 0; $i < count($_POST['curso']); $i++) {
            $curso = htmlspecialchars($_POST['curso'][$i] ?? '');
            $instituicao = htmlspecialchars($_POST['instituicao'][$i] ?? '');
            $ano = htmlspecialchars($_POST['ano'][$i] ?? '');

            echo "<p><strong>$curso</strong> – $instituicao ($ano)</p>";
        }
    }
    ?>
    <hr>

    <!-- Botões marcados como 'no-print' -->
    <div class="no-print" style="margin-top: 20px;">
        <button id="botao-impressao" onclick="window.print()">Baixar Currículo / Impressão</button>
        <a href="index.php" class="voltar">Voltar</a>
    </div>
</main>

</body>
</html>
