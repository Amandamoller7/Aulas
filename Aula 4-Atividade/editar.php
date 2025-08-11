<?php
// Edição com erro de lógica (não busca o ID corretamente)
include("conexao.php");
 // NÃO ENTENDI
$sql = "SELECT * FROM usuarios WHERE id = $id";
$res = mysqli_query($conn, $sql);   
$dado = mysqli_fetch_assoc($res);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {  //aspas simples
    $nome = $_POST['nome'];  ///aspas simples
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id";
    mysqli_query($conn, $sql);
    header("Location: index.php");
}
?>
<!--Não tem o cabeçalho do HTML-->
<form method="POST">
    Nome: <input type="text" name="nome" value="<?= $dado['nome'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $dado['email'] ?>"><br>
    <input type="submit" value="Salvar">
</form>