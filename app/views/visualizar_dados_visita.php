<?php
include '../../config/conexao_com_banco.php';
$data = array();
$sql = "SELECT nome, documento, apartamento  FROM visitantes ORDER BY apartamento";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Saída dos dados de cada linha
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    $data[] = array("nome" => "Nenhum resultado encontrado", "documento" => "", "apartamento" => "");
}
session_start();

    if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
        header("Location: ../index.php");
        exit;
    }
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Visualizar visitantes</title>
</head>
<body>
    <header class="d-flex justify-content-between align-items-center bg-secondary p-3 flex-wrap">
        <h1 class="text-white">Sistema de Portaria, visualizar visitantes</h1>
        <a class="btn btn-dark" href="../views/home.php">Voltar para tela inicial</a>
    </header>
    <main class='container mt-5'>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Documento</th>
                    <th>Apartamento</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $visita): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($visita['nome']); ?></td>
                        <td><?php echo htmlspecialchars($visita['documento']); ?></td>
                        <td><?php echo htmlspecialchars($visita['apartamento']); ?></td>
                        <td>
                        <form method='POST' action='../back-end/deletar.php'>
                        <input type="hidden" name='id' value="<?php $row['id']?>"/>
                            <button type='submit' class='btn btn-danger btn-sm'>Deletar</button>
                        </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    
</body>
</html>