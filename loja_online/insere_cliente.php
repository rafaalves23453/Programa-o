<?php
// Dados de conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "loja_online";

// Conexão com o banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}

// Recebe os dados do formulário
$Nome = $_POST['Nome'];
$DataDENascimento = $_POST['DataNascimento'];
$Endereco = $_POST['Endereco'];
$Bairro = $_POST['Bairro'];
$Cidade = $_POST['Cidade'];
$UF = $_POST['UF'];
$CEP = $_POST['CEP'];
$CPF = $_POST['CPF'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$senha = $_POST['senha'];

// Insere os dados na tabela "produtos"
$sql = "INSERT INTO cliente (Nome, Endereco, Bairro, Cidade, UF, CEP, CPF, email, telefone) VALUES ('$Nome', '$Endereco', '$Bairro', '$Cidade', '$UF', '$CEP', '$CPF', '$email', '$telefone')";
echo $sql;

if (mysqli_query($conexao, $sql)) {
    echo " Dados inseridos com sucesso!";
} else {
    echo " Erro ao inserir dados: " . mysqli_error($conexao);
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>