<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>Registro de clientes</title>
	  <script type="text/javascript" src="scripts/jquery-2.1.3.min.js"></script>
	  <script>
	  	$(document).ready(function(){
	  		$("#registro").submit(function(event){
	  			var nombre = $('#txtNombre').val();
	  			var apellidos = $('#txtApellidos').val();
	  			if(nombre && apellidos != "")
	  				return
	  			else{
	  				$("#errores").text("Debes rellenar todos los campos").show().fadeOut(2000);
	  				event.preventDefault();
	  			}
	  			
	  		});
	  	});
	  </script>
	</head>
<?php
	session_start();
	if(!isset($_SESSION['id_usuario'])){
		echo "Debes estar logueado...";
		header("Refresh: 1; login.php");
	}else{
		?>
	<body>
		<h1>Registro de clientes</h1>
		<div id="formulario">
			<form id="registro" action="operacionesCliente.php?=alta" method="post">
				<label for="nombre">Nombre:</label><input id="txtNombre" type="text" name="nombre"/></br></br>
				<label for="apellidos">Apellidos:</label><input id="txtApellidos" type="text" name="apellidos"/></br></br>
				<label for="estado">Estado:</label>
				<select name="estado">
					<option value="1">Aguascalientes</option>
					<option value="2">Baja California</option>
					<option value="3">Baja California Sur</option>
					<option value="4">Campeche</option>
					<option value="5">Chiapas</option>
					<option value="6">Chihuahua</option>
					<option value="7">Coahuila</option>
					<option value="8">Colima</option>
					<option value="9">DF</option>
					<option value="10">Durango</option>
					<option value="11">Edo. México</option>
					<option value="12">Guanajuato</option>
					<option value="13">Guerrero</option>
					<option value="14">Hidalgo</option>
					<option value="15">Jalisco</option>
					<option value="16">Michoacan</option>
					<option value="17">Morelos</option>
					<option value="18">Nayarit</option>
					<option value="19">Nuevo León</option>
					<option value="20">Oaxaca</option>
					<option value="21">Puebla</option>
					<option value="22">Querétaro</option>
					<option value="23">Quintana Roo</option>
					<option value="24">San Luis Potosí</option>
					<option value="25">Sinaloa</option>
					<option value="26">Sonora</option>
					<option value="27">Tabasco</option>
					<option value="28">Tamaulipas</option>
					<option value="29">Tlaxcala</option>
					<option value="30">Veracruz</option>
					<option value="31">Yucatán</option>
					<option value="32">Zacatecas</option>
				</select></br></br>
				<input id="bRegistrar"type="submit" name="registrar" value="Registrar"/>	
			</form>
		</div>
		<span id="errores"></span>	
	</body>	
</html>
		<?
	}
?>
