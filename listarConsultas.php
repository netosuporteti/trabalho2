<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Consultas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Listagem de Consultas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Data</th>
                    <th>Horário</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Incluir arquivo de conexão com o banco de dados
                    include 'conexao.php';

                    // Consulta SQL para buscar os dados na tabela
                    $sql = "SELECT * FROM usuarios";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Saída dos dados
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["nome"]."</td><td>".$row["email"]."</td><td>".$row["cpf"]."</td><td>".$row["telefone"]."</td><td>".$row["data"]."</td><td>".$row["horario"]."</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Nenhum resultado encontrado.</td></tr>";
                    }

                    $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>