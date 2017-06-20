 <!-- 
	Autor : Edwar Cruz 
	Este es el código de la función mail, me permite enviar el correo ademas muestra un mensaje de éxito.
  -->

 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<?php 
	include 'config.php';
	$para=$_GET['para'];
	$edad=$_GET['edad'];
	$asunto=$_GET['asunto'];
	$mensaje=$_GET['mensaje'];

	$sql="";
	$sql .= "INSERT INTO tb_usuarios (correo , edad , estado )";
	$sql .= "value ( '$para' , '$edad' , '0' )";
	$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);
	$resultado = $conexion->query($sql);
	//echo $sql;

	// Este es el contenido que se vera en el correo.
	$html = "<body style='font-family:Arial'>";
	$html .= $mensaje;
	$html .= "<br>";
	$html .= "<img src='http://app-1494340402.000webhostapp.com/img/bien.png'>";
	$html .= "<br>";
	$html .= "<a href='http://app-1494340402.000webhostapp.com/recepcion.php?correo=$para&edad=$edad'><h2><b>Entrar</b></h3></a>";
	$html .= "</body>";
	

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// Este es el destinatario.
	$headers .= 'From: <ecruzh8@gmail.com>' . "\r\n";
	
?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Funcion mail</title>
 </head>
 <body style="background-color: #3498DB">
 	<div class="container-fluid">
 		<br><br>
 		<div class="row">
 			<div class="col-xs-12 col-md-4"></div>
 			<div class="col-xs-12 col-md-4 well" style="background-color: #ffffff">
 				<h4>Remite : <b>@</b>Edwar_Cruz</h4>
 				<?php echo"Enviando correo a ". $para; ?>	
 			</div>
 			<div class="col-xs-12 col-md-4"></div>
 		</div>

 		<div class="row">
 			<div class="col-xs-12 col-md-4"></div>
 			<div class="col-xs-12 col-md-4">
			 	<?php 	
			 		echo "<a href='recepcion.php?correo=". $para . "&edad= ". $edad . "'>localhost/ec/mail/recepcion.php?correo=correo=". $para . "&edad= ". $edad . "</a>";
					//mail($para, $asunto, $html, $headers);
			 	?>	
 				<center>
 					<img width="100%" src="img/mail.png">
 				</center>
 			</div>
 			<div class="col-xs-12 col-md-4"></div>
 		</div>
 	</div>
 </body>
 </html>
