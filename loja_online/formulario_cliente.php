<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Formulário - Cadastro de cliente</title>
</head>
<body>
    <h2>Preencha o formulário:</h2>
    <form action="processa_cliente.php" method="post">
        <label for="Nome">Nome:</label>
        <input type="text" id="Nome" name="Nome"><br><br>

        <label for="Data De Nascimento">Data De Nascimento:</label>
        <input type="text" id="Data De Nascimento" name="Data De Nascimento"><br><br>

        <label for="Endereço">Endereço:</label>
        <input type="text" id="Endereço" name="Endereço"><br><br>

        <label for="Bairro">Bairro:</label>
        <input type="text" id="Bairro" name="Bairro"><br><br>

        <label for="Cidade">Cidade:</label>
        <input type="text" id="Cidade" name="Cidade"><br><br>

        <label for="UF">UF:</label>
        <input type="text" id="UF" name="UF"><br><br>

        <label for="CEP">CEP:</label>
        <input type="text" id="CEP" name="CEP"><br><br>

        <label for="CPF">CPF:</label>
        <input type="text" id="CPF" name="CPF"><br><br>

        <label for="e-mail">e-mail:</label>
        <input type="text" id="e-mail" name="e-mail"><br><br>

        <label for="telefone">telefone:</label>
        <input type="text" id="telefone" name="telefone"><br><br>

        <label for="sexo">sexo:</label>
        <input type="text" id="sexo" name="sexo"><br><br>

        <label for="senha">senha:</label>
        <input type="text" id="senha" name="senha"><br><br>
        
        <label for="funcionario">funcionario:</label>
        <input type="text" id="funcionario" name="funcionario"><br><br>

                <label for="sexo">sexo:</label>
        <select id="sexo" name="sexo">
        <option value="M">Masculino</option>
        <option value="F">Feiminino</option>
        <option value="N">Nao Informado</option>
        </select>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
