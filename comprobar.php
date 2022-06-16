<?php 
echo"<h1>Datos</h1>";
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$contraseña=$_POST['contras'];
$sexo=$_POST['sexo'];
$estudios=$_POST['estudios'];
$comentario=$_POST['comentario'];

echo "<b>Nombre:</b> $nombre<br/>";
echo "<b>apellidos:</b> $apellidos<br/>";
echo "<b>E-mail:</b> $email<br/>";
echo "<b>Contraseña:</b> $contraseña<br/>";
echo "<b>Sexo:</b> $sexo<br/>";
echo "<b>Estudios:</b> $estudios<br/>";
echo "<b>Tu comentario:</b> $comentario<br/>";
?>
