<?php 
	$login = $_POST["login"];
	$entrar = $_POST["entrar"];
	$senha = md5($_POST["senha"]);

	$server = "mysql";
	$user = $_ENV["username"];
	$pass = $_ENV["password"];
	$db = $_ENV["database_name"];

	$conn = new mysqli($server, $user, $pass, $db);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if (isset($entrar)) {
	  $verifica = $conn->query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'");
	    if (mysqli_num_rows($verifica)<=0){
	      echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos. Se não possuir usuário Cadastre-se.');window.location.href='login.html';</script>";
	      die();
	    }else{
	      setcookie("login",$login);
	      header("Location:index.php");
	    }
	}
	$conn->close();
?>