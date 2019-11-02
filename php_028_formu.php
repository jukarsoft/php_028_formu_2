<?php
	//enviar contenido enviando el juego de caracteres UTF-8
	header('Content-Type: text/html; charset=UTF-8');
	$yearOld=0;
	//se ejecuta si se ha pulsado el boton 'enviar'
	if (isset($_POST['enviar'])) {
		$name=$_POST['nombre'];
		$yearOld=$_POST['edad'];
		$phone=$_POST['telefono'];
		$pass=$_POST['pass'];
		echo "$name $yearOld $phone $pass";
		print_r($_POST);
		//comprobación si es numerico
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
		<input type="text" name="nombre" placeholder="nombre" required />
		<input type="number" name="edad" placeholder="edad"/>
		<input type="text" name="telefono" placeholder="telefono"/><br><br>
		<input type="password" name="pass">
		<input type="submit" value='Enviar' name="enviar">
	</form>
</body>
</html>