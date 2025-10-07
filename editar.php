<?php include('conexao.php'); ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM veiculos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Veículo</title>
<link rel="stylesheet" href="style.css">

</head>
<body>

<h2>Editar Veículo</h2>

<form method="POST">
    <input type="text" name="modelo" value="<?= $row['modelo'] ?>" required>
    <input type="text" name="placa" value="<?= $row['placa'] ?>" required>
    <input type="text" name="cor" value="<?= $row['cor'] ?>" required>
    <input type="number" name="estoque" value="<?= $row['estoque'] ?>" required>
    <input type="number" name="ano" value="<?= $row['ano'] ?>" required>
    <button type="submit">Atualizar</button>
</form>

<a href="index.php">← Voltar</a>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $cor = $_POST['cor'];
    $estoque = $_POST['estoque'];
    $ano = $_POST['ano'];

    $sql = "UPDATE veiculos SET modelo='$modelo', placa='$placa', cor='$cor', estoque='$estoque', ano='$ano' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Veículo atualizado com sucesso!</p>";
    } else {
        echo "<p>Erro: " . $conn->error . "</p>";
    }
}
?>
</body>
</html>
