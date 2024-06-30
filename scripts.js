$(document).ready(function() {
    $('#data_nascimento').on('change', function() {
        var dataNascimento = new Date($(this).val());
        var hoje = new Date();
        var idade = hoje.getFullYear() - dataNascimento.getFullYear();
        var m = hoje.getMonth() - dataNascimento.getMonth();
        if (m < 0 || (m === 0 && hoje.getDate() < dataNascimento.getDate())) {
            idade--;
        }
        $('#idade').val(idade);
    });

    $('#addExperiencia').on('click', function() {
        $('#experiencias').append(`
            <div class="experiencia">
                <label for="nome_experiencia">Nome da Experiência:</label>
                <input type="text" name="nome_experiencia[]" required><br>
                
                <label for="descricao_experiencia">Descrição:</label>
                <textarea name="descricao_experiencia[]" required></textarea><br>
                
                <label for="data_inicio_experiencia">Data de Início:</label>
                <input type="date" name="data_inicio_experiencia[]" required><br>
                
                <label for="data_fim_experiencia">Data de Fim:</label>
                <input type="date" name="data_fim_experiencia[]" required><br>
            </div>
        `);
    });

    $('#printCurriculo').on('click', function() {
        window.print();
    });
});
