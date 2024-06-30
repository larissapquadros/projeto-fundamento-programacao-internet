<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Currículo</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="curriculo.php">Cadastrar Currículo</a></li>
            <li><a href="#" id="printCurriculo">Baixar Currículo</a></li>
        </ul>
    </nav>
    <h1>Cadastro de Currículo</h1>
    <form action="save.php" method="post" id="curriculoForm">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>
        
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br>

        <label for="idade">Idade:</label>
        <input type="text" id="idade" name="idade" readonly><br>

        <label for="experiencias">Experiências:</label>
        <div id="experiencias">
            <div class="experiencia">
                <label for="nome_experiencia"> Experiência:</label>
                <input type="text" name="nome_experiencia[]" required><br>
                
                <label for="descricao_experiencia">Descrição:</label>
                <textarea name="descricao_experiencia[]" required></textarea><br>
                
                <label for="data_inicio_experiencia">Data de Início:</label>
                <input type="date" name="data_inicio_experiencia[]" required><br>
                
                <label for="data_fim_experiencia">Data de Fim:</label>
                <input type="date" name="data_fim_experiencia[]" required><br>
            </div>
        </div>
        <button type="button" id="addExperiencia">Adicionar Experiência</button><br><br>
        
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
