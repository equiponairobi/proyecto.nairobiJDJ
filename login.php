<?php
//inicio de sesion:
session_start()
$email = $_POST['email'];
$contrasenia = $_POST['contrasenia'];

$conn = pg_connect("host=127.0.0.1 port=5432 dbname=nairobi user=nairobi password=nairobi") or die():
	$result = pg_query($conn) or die (pg_last_error());
$row =pg_fetch_row($result);

$contrasenia = $row[0];
$rol = $rol[1];

if($contrasenia == $contrasenia) {
	switch ($rol) {
		case 'c'
			$_SESSION['id'] = 2;
			$_SESSION['usr'] = $email;
			header('Location: index.php');
			break;
		case 'a'
			$_SESSION['id'] = 1;
			$_SESSION['usr'] = $email;
			header('Location: index.php');
			break;
		default:
			break;

}
else{
	echo 'Informacion incorrecta'
	//regresar al login.php:
	session_destroy();
	header('Location: registro.html');
}
?>
