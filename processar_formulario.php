<?php
// Incluir arquivo de conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $horario = $_POST['horario'];
    $data = $_POST['data'];

    // Prepara a consulta SQL para inserir os dados na tabela
    $sql = "INSERT INTO usuarios (nome, email, cpf, telefone, horario, data) VALUES ('$nome', '$email', '$cpf', '$telefone', '$horario', '$data')";

    // Executa a consulta SQL
    if ($conn->query($sql) === TRUE) {
        
        echo "<script>window.location.href = 'listarConsultas.php';</script>";
    } else {
        echo "Erro ao inserir os dados: " . $conn->error;
    }
    
    // Adicionar um atraso de 2 segundos antes de redirecionar
sleep(2);

// Redirecionar para listarConsultas.php
header("Location: listarConsultas.php");
exit();

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
