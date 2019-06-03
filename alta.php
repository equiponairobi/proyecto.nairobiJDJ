<?php
var_dump($_POST);
	$nombre = $_POST['nombre'];
	$apatern = $_POST['apatern'];
	$amatern = $_POST['amatern'];
	$email = $_POST['email'];
	$contrasenia = md5 ($_POST['contrasenia']);
	$query = "INSERT INTO USUARIOS (nombre, apatern, amatern, email, contrasenia,rol) VALUES ('$nombre', '$apatern', '$amatern', '$email', '$contrasenia','c')";
	$conn = pg_connect("host=127.0.0.1 port=5432 dbname=nairobi  user=nairobi  password=nairobi") or die (pg_last_error());
	$result = pg_query($conn, $query) or die (pg_last_error());
	pg_close($conn);
        header('Location: http://www.nairobi.com.mx/index.php');
?>
