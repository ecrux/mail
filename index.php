<!-- 
	Autor : Edwar Cruz
	Este es el archivo principal de mi proyecto, en el se ingresan los parámetros de envio del correo.
 -->


<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="background-color:  #EAFAF1">
	<div class="container-fluid" >
		<div class="row" style="background-color: #2ECC71; height: 35px; text-align: right;">
			<div class="container">
				<b>@</b>Edwar_Cruz <b><<</b>
			</div> 
		</div><br>
		<div class="row">
			<div class="col-xs-12 col-md-4"></div>
			<div class="col-xs-12 col-md-4 well">
				<!-- <div class="container"> -->
					<form action="mail.php" method="get">
					<h2>Mensaje Nuevo</h2>
						<li>Para : </li>
						<input type="text" name="para" placeholder="Para" class="form-control">
						<li>Asunto : </li>
						<input type="text" name="asunto" placeholder="Asunto" class="form-control">
						<li>Mensaje : </li>
						<textarea name="mensaje" class="form-control" ></textarea>
						<li>Edad : </li>
						<input type="text" name="edad" placeholder="Edad" class="form-control"><br>
						<center><input type="submit" value="Enviar" class="btn btn-success center"></center>
						
					</form>
				<!-- </div> -->
			</div>
			<div class="col-xs-12 col-md-4"></div>
		</div>
		
	</div>

</body>
</html>