<<<<<<< HEAD
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
=======
<?php
	session_start();
	$usuario = $_POST['usuario'];
	$password = md5($_POST['password']);
	$queryuser = "SELECT password,rol,activo FROM usuario WHERE usuario = '".$usuario."'";
	$conn = pg_connect("host=127.0.0.1 port=5432 dbname=nairobi user=nairobi password=nairobi") or die();
	$result = pg_query($conn, $queryuser) or die (pg_last_error());
	$row = pg_fetch_row($result);
	$passwordbd = $row[0];
	$rol = $row[1];
	$activo = $row[2];
	if($passwordbd == $password && $activo == 't'){
		switch ($rol) {
			case 'c':
				$_SESSION['id'] = 1;
				$_SESSION['usr'] = $usuario;
				header('Location: index.php');
				break;
			case 'a':
				$_SESSION['id'] = 99;
				$_SESSION['usr'] = $usuario;
				header('Location: index.php');
				break;
			default:
				# code...
				break;
		}
	}else{
			if($activo != 't'){
				echo 'La cuenta se encuentra bloqueada, para mas información contacte con nosotros';
				session_destroy();
				header('Location: index.php');
			}else{
				echo 'La informacion ingresada es incorrecta, vuelva a ingresarla nuevamente';
				session_destroy();
				header('Location: loginform.html');
			}
		}
?>
>>>>>>> 1b7e947c85674401fd73f163aac30de52ce9effc
