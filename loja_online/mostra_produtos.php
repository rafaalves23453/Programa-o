<!DOCTYPE html>
<html>
<head>
	<title>Lista de clientes</title>
</head>
<body>
	<h2>Lista de clientes</h2>

	<table>
		<thead>
			<tr>
				<th>Código</th>
				<th>Descrição</th>
				<th>Unidade</th>
				<th>Preço</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Conexão com o banco de dados
			$host = "localhost";
			$user = "root";
			$password = "";
			$database = "loja_online";

			$conexao = mysqli_connect($host, $user, $password, $database);

			// Consulta na tabela de produtos
			$sql = "SELECT * FROM clientes";
			$resultado = mysqli_query($conexao, $sql);

			// Loop para exibir os resultados
			while ($produto = mysqli_fetch_array($resultado)) {
				echo "<tr>";
				echo "<td>" . $nome['codigo'] . "</td>";
				echo "<td>" . $telefone['descricao'] . "</td>";
				echo "<td>" . $email['unidade'] . "</td>";
				echo "<td>" . $cidade['preco'] . "</td>";
				echo "</tr>";
			}

			// Fechar a conexão com o banco de dados
			mysqli_close($conexao);
			?>
		</tbody>
	</table>

</body>
</html>