
<html>
<head>
	<title>Lista de clientes</title>
</head>
<body>
	<h2>Lista de clientes</h2>

	<table>
		<thead>
			<tr>
				<th>nome</th>
				<th>telefone</th>
				<th>email</th>
				<th>cidade</th>
                <th>uf</th>
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
			$sql = "SELECT nome, telefone, email, cidade, uf FROM cliente";
			$resultado = mysqli_query($conexao, $sql);

			// Loop para exibir os resultados
			while ($cliente = mysqli_fetch_array($resultado)) {
				echo "<tr>";
				echo "<td>" . $cliente['nome'] . "</td>";
				echo "<td>" . $cliente['telefone'] . "</td>";
				echo "<td>" . $cliente['email'] . "</td>";
				echo "<td>" . $cliente['cidade'] . "</td>";
                echo "<td>" . $cliente['uf'] . "</td>";
				echo "</tr>";
			}

			// Fechar a conexão com o banco de dados
			mysqli_close($conexao);
			?>
		</tbody>
	</table>

</body>
</html>