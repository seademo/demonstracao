<?php 

$server = "mysql";
$user = $_ENV["username"];
$pass = $_ENV["password"];
$db = $_ENV["database_name"];

echo "<h1> Demonstração Openshift <br><hr></h1> ";
echo "<h2>Usuários cadastrados no Banco de Dados:</h2>";
echo "<br><hr>";

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexão ao banco de dados falhou: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM usuarios");
if ($result->num_rows > 0) {
    echo "<table>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nome</th>";
            echo "<th>Login</th>";
        echo "</tr>";
        while($row = $result->fetch_assoc()) {
        echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['login'] . "</td>";
        echo "</tr>";
        }
    echo "</table>";
}
else {
    echo "0 results";
}

$conn->close();

?>