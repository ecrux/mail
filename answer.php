			
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