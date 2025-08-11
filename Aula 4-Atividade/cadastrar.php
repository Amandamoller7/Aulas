<?php
// Cadastro com erros de sintaxe e falta de validação
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") { // As aspas deveriam ser simples
    $nome = $_POST["nome"];      //da mesma forma                               // Aqui as chaves não fecham
    $email = $_POST["email"] //falta ponto e virgula no fim da frase

    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
    $res = mysqli_query($conn, $sql);
    if ($res) {  // A condição está incorreta, pois não esta conectando o banco de dados com nada.
        echo "Usuário cadastrado com sucesso!";
    else
        echo "Erro ao cadastrar!";
}
//Está faltando fechar a conexão entre o php e o banco de dados

?>

<!-- Não tem o cabeçalho do HTML-->
<form method="POST"> <!--Falta colocar a ação-->
    Nome: <input type="text" name="nome"><br>  <!-- Não foi usado a tag "LABEL" para definir o nome-->
    Email: <input type="email" name="email"><br>
    <input type="submit" value="Cadastrar">
</form>

<!-- Precisa finalizar o HTML-->