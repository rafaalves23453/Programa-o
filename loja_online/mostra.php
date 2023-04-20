<!DOCTYPE html>
<html>
<head>
	<title>Lista de Produtos</title>
</head>
<body>
	<h2>Lista de Produtos</h2>

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
			$sql = "SELECT * FROM produtos";
			$resultado = mysqli_query($conexao, $sql);

			// Loop para exibir os resultados
			while ($produto = mysqli_fetch_array($resultado)) {
				echo "<tr>";
				echo "<td>" . $produto['codigo'] . "</td>";
				echo "<td>" . $produto['descricao'] . "</td>";
				echo "<td>" . $produto['unidade'] . "</td>";
				echo "<td>" . $produto['preco'] . "</td>";
				echo "</tr>";
			}

			// Fechar a conexão com o banco de dados
			mysqli_close($conexao);
			?>
		</tbody>
	</table>

</body>
</html>