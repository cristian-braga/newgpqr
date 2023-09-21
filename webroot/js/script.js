function lancar() {
    const botao = document.getElementById('submit');
    const selec_todos = document.getElementById('selec_todos');
    let checkboxes = document.querySelectorAll('input[type="checkbox"]');

    selec_todos.addEventListener('click', function() {
        const selecionado = selec_todos.checked;

        checkboxes.forEach(function(checkbox) {
            checkbox.checked = selecionado;
        });
    });

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('click', function() {
            if (document.querySelector('input[type="checkbox"]:checked')) {
                botao.style.visibility = 'visible';  // Mostra o botão quando algum checkbox é selecionado
            } else {
                botao.style.visibility = 'hidden';  // Esconde o botão quando nenhum checkbox é selecionado
            }
        });
    });
}

lancar();

function desabilitaBotao() {
    let botoes = document.querySelectorAll('button[type="submit"]');

    document.addEventListener('submit', function() {
        botoes.forEach(function(botao) {
            botao.disabled = true;
        });
    });
}

desabilitaBotao();

