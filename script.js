// script.js – versão com adicionar + remover + cálculo de idade
document.addEventListener("DOMContentLoaded", () => {
    // ======== CÁLCULO AUTOMÁTICO DE IDADE ========
    const dataNasc = document.getElementById("dataNasc");
    const idade = document.getElementById("idade");

    if (dataNasc && idade) {
        dataNasc.addEventListener("change", () => {
            const nascimento = new Date(dataNasc.value);
            const hoje = new Date();
            let anos = hoje.getFullYear() - nascimento.getFullYear();
            if (
                hoje.getMonth() < nascimento.getMonth() ||
                (hoje.getMonth() === nascimento.getMonth() &&
                    hoje.getDate() < nascimento.getDate())
            ) {
                anos--;
            }
            idade.value = anos;
        });
    }

    // ======== ADICIONAR NOVAS EXPERIÊNCIAS ========
    const addExp = document.getElementById("addExp");
    const experiencias = document.getElementById("experiencias");

    if (addExp && experiencias) {
        addExp.addEventListener("click", () => {
            const div = document.createElement("div");
            div.classList.add("exp");
            div.innerHTML = `
                <label>Empresa:</label>
                <input type="text" name="empresa[]">
                <label>Cargo:</label>
                <input type="text" name="cargo[]">
                <label>Período:</label>
                <input type="text" name="periodo[]">
                <label>Descrição:</label>
                <textarea name="descricao[]"></textarea>
                <button type="button" class="remover">Remover</button>
            `;
            experiencias.appendChild(div);
        });
    }

    // ======== ADICIONAR NOVAS FORMAÇÕES ========
    const addFormacao = document.getElementById("addFormacao");
    const formacoes = document.getElementById("formacoes");

    if (addFormacao && formacoes) {
        addFormacao.addEventListener("click", () => {
            const div = document.createElement("div");
            div.classList.add("formacao");
            div.innerHTML = `
                <label>Curso:</label>
                <input type="text" name="curso[]">
                <label>Instituição:</label>
                <input type="text" name="instituicao[]">
                <label>Ano de conclusão:</label>
                <input type="text" name="ano[]">
                <button type="button" class="remover">Remover</button>
            `;
            formacoes.appendChild(div);
        });
    }

    // ======== REMOVER QUALQUER BLOCO ========
    document.body.addEventListener("click", (e) => {
        if (e.target.classList.contains("remover")) {
            e.preventDefault(); // evita envio do formulário
            const bloco = e.target.closest(".exp, .formacao");
            if (bloco) bloco.remove();
        }
    });
});
