<?php 
	
	$correo=$_GET['correo'];
	
	$edad=$_GET['edad'];

	

	echo "<br>";

	if ($edad > 40) {
		$error = "Tienes una edad apropiada para acceder a todos nuestros servicios.";
	}else{
		$error = "Eres menor de edad, pueda que no tengas acceso a todos los servicios.";
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Verificci&oacute;n</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="icon" href="/img/animated_favicon1.gif" type="image/gif">
</head>
<body style="background-color: #CC0000">
	<div class="container-fluid">
		<br>
		<div class="row">
			<div class="container">
				<div class="col-xs-12 col-md-2"></div>
				<div class="col-xs-12 col-md-8">
					<center>
						<img src="img/very.png" width="60%">
						<h1 style="color : #ffffff ">
							Bienvanid@!!!
						</h1>
						<h3>
							<p style="color:#ffffff"><?php echo "Se ha registrado el usuario ". $correo; ?></p>
							<h4 style="color:#ffffff"><?php echo $error; ?></h4>
						</h3>

					</center>
				</div>
				<div class="col-xs-12 col-md-2"></div>
			</div>
		</div>
	</div>
</body>
</html>