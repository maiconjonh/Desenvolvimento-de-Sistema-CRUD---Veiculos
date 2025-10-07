<?php include('conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Gerenciamento de Veículos</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
 <div class="container">
    <header>
      <h1>Gerenciamento de Veículos</h1>
    </header>

    <a href="criar.php" class="add-button">+ Adicionar Novo Veículo</a>
 
    <table>
<tr>
    <th>ID</th>
    <th>Modelo</th>
    <th>Placa</th>
    <th>Cor</th>
    <th>Estoque</th>
    <th>Ano</th>
    <th>Ações</th>
</tr>

<?php
$sql = "SELECT * FROM veiculos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['modelo']}</td>
            <td>{$row['placa']}</td>
            <td>{$row['cor']}</td>
            <td>{$row['estoque']}</td>
            <td>{$row['ano']}</td>
            <td>
                <a href='editar.php?id={$row['id']}'>Editar</a> | 
                <a href='deletar.php?id={$row['id']}' onclick='return confirm(\"Deseja excluir?\")'>Excluir</a>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='7'>Nenhum veículo cadastrado.</td></tr>";
}
$conn->close();
?>
</table>
  
  </div>

<footer>Desenvolvido em PHP • CRUD de Veículos</footer>
</body>
</html>
