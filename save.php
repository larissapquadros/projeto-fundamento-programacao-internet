<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $idade = $_POST['idade'];
    
    $nome_experiencia = $_POST['nome_experiencia'];
    $descricao_experiencia = $_POST['descricao_experiencia'];
    $data_inicio_experiencia = $_POST['data_inicio_experiencia'];
    $data_fim_experiencia = $_POST['data_fim_experiencia'];

    echo "<h1>Dados Recebidos</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Data de Nascimento: $data_nascimento</p>";
    echo "<p>Idade: $idade</p>";
    echo "<h2>Experiências</h2>";
    echo "<ul>";
    for ($i = 0; $i < count($nome_experiencia); $i++) {
        echo "<li>";
        echo "<strong>Nome:</strong> " . htmlspecialchars($nome_experiencia[$i]) . "<br>";
        echo "<strong>Descrição:</strong> " . nl2br(htmlspecialchars($descricao_experiencia[$i])) . "<br>";
        echo "<strong>Data de Início:</strong> " . htmlspecialchars($data_inicio_experiencia[$i]) . "<br>";
        echo "<strong>Data de Fim:</strong> " . htmlspecialchars($data_fim_experiencia[$i]) . "<br>";
        echo "</li>";
    }
    echo "</ul>";
}
?>
