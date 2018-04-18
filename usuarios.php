<?php 

$server = getenv("mysql");
$user = getenv("username");
$pass = getenv("password");
$db = getenv("database_name");

echo "<h1> Demonstração Openshift <br><hr></h1> ";
echo "<br><hr>";
echo "<h2>Usuários cadastrados no Banco de Dados:</h2>";
echo "<br><hr>";

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexão ao banco de dados falhou: " . $conn->connect_error);
}

$result = $conn->query("SELECT login FROM usuarios");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3>" . $row["login"] . "</h3>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>