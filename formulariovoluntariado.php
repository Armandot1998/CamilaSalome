<?php
if($_POST["nombre"] && $_POST["email"] != ""){
	$de = $_POST["nombre"];
	$destino = "info@camilasalome.org";
	$asunto = "Formulario Voluntariado";
	$mensaje .= "FORMULARIO."."\n";
	$mensaje .= "\n";
	$mensaje .= "NOMBRE Y APELLIDO: " . utf8_decode($_POST["nombre"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "CEDULA DE IDENTIDAD: " . utf8_decode($_POST["cedula"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "FECHA DE NACIMIENTO: " . utf8_decode($_POST["nacimiento"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "NACIONALIDAD: " . utf8_decode($_POST["nacionalidad"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "TELEFONO: " . utf8_decode($_POST["telefono"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "EMAIL: " . utf8_decode($_POST["email"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "NIVEL DE ESTUDIOS: " . utf8_decode($_POST["estudios"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "ESPECIALIDAD: " . utf8_decode($_POST["especialidad"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "LUGAR DE TRABAJO: " . utf8_decode($_POST["trabajo"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "CARGO QUE DESEMPEÑA: " . utf8_decode($_POST["cargo"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "RAZONES DE VOLUNTARIADO: " . utf8_decode($_POST["razones"]) ."\n";
	$mensaje .= "\n";


	$mensaje .= "OTRO: " . utf8_decode($_POST["otro"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "TIEMPO DE DEDICACION: " . utf8_decode($_POST["tiempo"]) ."\n";
	$mensaje .= "\n";

    $emailheader = "From: WEB CAMILA SALOME <tuemail>\r\n";
mail($destino, $asunto, $mensaje, $emailheader) or die ("Lo sentimos, tu solicitud no ha sido enviada.<br/>Intentelo de nuevo."); echo "<SCRIPT>window.location='http://www.camilasalome.org';</SCRIPT>";
	} else {
    if($_POST["nombre"] == ""){
    echo utf8_encode ('Por favor, indica tu nombre.');
    exit; }
	if($_POST["email"] == ""){
    echo utf8_encode ('Por favor, indica un email de contacto.');
    exit; }
}
?>