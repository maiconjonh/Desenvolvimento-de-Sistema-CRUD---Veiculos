<?php include('conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Adicionar Veículo</title>
<link rel="stylesheet" href="style.css">

</head>
<body>

<h2>Adicionar Novo Veículo</h2>

<form action="" method="POST">
    <input type="text" name="modelo" placeholder="Modelo" required>
    <input type="text" name="placa" placeholder="Placa" required>
    <input type="text" name="cor" placeholder="Cor" required>
    <input type="number" name="estoque" placeholder="Estoque" required>
    <input type="number" name="ano" placeholder="Ano" required>
    <button type="submit">Salvar</button>
</form>

<a href="index.php">← Voltar</a>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $cor = $_POST['cor'];
    $estoque = $_POST['estoque'];
    $ano = $_POST['ano'];

    $sql = "INSERT INTO veiculos (modelo, placa, cor, estoque, ano)
            VALUES ('$modelo', '$placa', '$cor', '$estoque', '$ano')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Veículo cadastrado com sucesso!</p>";
    } else {
        echo "<p>Erro: " . $conn->error . "</p>";
    }
}
?>
</body>
</html>
