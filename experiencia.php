<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Informações Pessoais</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>

<header>
    <h1>Gerador de Currículos</h1>
</header>

<main>
    <h2>Etapa 2 – Informações Pessoais</h2>
    <form action="formacao.php" method="post" id="form-dados">
        <label>Nome completo:</label>
        <input type="text" name="nome" required>

        <label>Data de nascimento:</label>
        <input type="date" id="dataNasc" name="data_nasc" required>

        <label>Idade:</label>
        <input type="number" id="idade" name="idade" readonly>

        <label>E-mail:</label>
        <input type="email" name="email" required>

        <label>Telefone:</label>
        <input type="text" name="telefone">

        <label>Endereço completo:</label>
        <input type="text" name="endereco">

        <h3>Experiências Profissionais</h3>
        <div id="experiencias">
            <div class="exp">
                <label>Empresa:</label>
                <input type="text" name="empresa[]">
                <label>Cargo:</label>
                <input type="text" name="cargo[]">
                <label>Período:</label>
                <input type="text" name="periodo[]">
                <label>Descrição:</label>
                <textarea name="descricao[]"></textarea>
                <button type="button" class="remover">Remover</button>
            </div>
        </div>

        <button type="button" id="addExp">+ Adicionar experiência</button>
        <br><br>
        <button type="submit">Próximo – Formação Acadêmica</button>
    </form>
</main>

</body>
</html>
