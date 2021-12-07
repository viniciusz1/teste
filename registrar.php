<?php
require_once("bootstrap.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrar PHP</title>
</head>
<body>
	<h2>Login</h2>
		<form action="" method = "post">
			Nome completo
			<input name = "nome" type = "text" placeholder = "Ex: André Silva"><br>
			E-mail
			<input name="email" type="email" placeholder= "E-maio(o mesmo da compra)" required><br><!--
			Senha
			<input name="senha1" type="password" placeholder="6 ou mais dígitos" autocomplete="off" required><br>
			Repita a senha
			<input name="senha2" type="password" placeholder="Confirme a sua senha" autocomplete="off" required><br>
			<input type="checkbox" required="" name="termos">Eu li e aceito os Termos de Serviço><br>-->
			<button type="submit" class="btn btn-block mt-lg btn-default"><b>Cadastrar</b></button>
		</form>
</body>
</html>
<?php
if($_POST){

	date_default_timezone_set('Brazil/East');

$nome = $_POST['nome'];
$nome = htmlspecialchars($nome,ENT_QUOTES);

$email = $_POST['email'];
$email = htmlspecialchars($email, ENT_QUOTES);

$data = date("Y-m-d H:i:s");

$ip = $_SERVER['REMOTE_ADDR'];

	

	$sql1=mysqli_query($conn, "INSERT INTO users (nome, email, data) VALUES ('$nome', '$email', '$data')");

}
?>



?>