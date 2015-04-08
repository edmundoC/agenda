<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Administrador de cartera de clientes</title>
        <link rel="stylesheet" href="css/estilos.css" type="text/css"/>
        <script type="text/javascript" src="scripts/jquery-2.1.3.min.js"></script>
        <script>
        	$(document).ready(function(){
        		$("#logout").after('<span id="respuesta"></span>');
        		$("tr").on("click",function(){
        			$.ajax({
        				beforeSend: function(){
        					
        				},
        				data: {id: $(this).attr('id')},
        				url:'procesar.php',
        				method: 'POST',
        				success: function(respuesta){
        					$("#respuesta").html(respuesta);
        				}
        			});
        		});
        	});
        </script>
    </head>
    <body>
    	<?php
			session_start();
			include "config.php";
			if(isset($_SESSION['usuario'])){
				$usuario = $_SESSION['usuario'];
				$id_usuario = $_SESSION['id_usuario'];
				?>
				<h1>Administrador de cartera...</h1>
        		<span>Te encuentras logueado como: <?echo $usuario?></span>
        		<div id=clientes>
        			<h3>Tus clientes son:</h3>
        			<?php
        				$query = "SELECT c.nombre, c.apellidos from usuarios AS u, clientes AS c WHERE c.id_usuario = u.id_usuario AND u.id_usuario = '".$id_usuario."'";	
        				$result = mysql_query($query);
						echo "<table border=1>";  
						echo "<tr>";  
						echo "<th>Nombre</th>";  
						echo "<th>Apellidos</th>";  
						echo "</tr>";
						$cont_filas = 1;
						while ($row = mysql_fetch_row($result)){
							echo "<tr id='".$cont_filas."'>";  
    						echo "<td>$row[0]</td>";  
    						echo "<td>$row[1]</td>";  
    						echo "</tr>";
							$cont_filas++;  
						}  
						echo "</table>";  
					?>
        		</div>
        		<div>
        			<a href="registroCliente.php">Agregar clientes</a></br></br>
        		</div>
        		<div id="logout">
        			<a href="logout.php">Cerrar Sesi&oacute;n</a></br></br>
        		</div>
        	<?	
			}
			else{
				echo "Error: Debes estar logueado";
				?></br></br><a href="login.php">Iniciar Sesión</a><span> o espera a ser redirigido</span><?
				header("Refresh: 5;login.php");
	
}
			
		?>
	</body>
</html>