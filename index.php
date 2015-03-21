<?php
	session_start();
	include "config.php";
	$usuario = $_SESSION['usuario'];
	$id_usuario = $_SESSION['id_usuario'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Administrador de cartera de clientes</title>
        <script type="text/javascript" src="scripts/jquery-2.1.3.min.js"></script>
        <script>
        	$(document).ready(function(){
        		
        	});
        </script>
    </head>
    <body>
    	<h1>Administrador de cartera...</h1>
        <span>Te encuentras logueado como: <?echo $usuario?></span>
        <div id=clientes>
        	<span>Tus clientes son:</span>
        	<?php
        		$query = "SELECT c.nombre, c.apellidos from usuarios AS u, clientes AS c WHERE c.id_usuario = u.id_usuario AND u.id_usuario = '".$id_usuario."'";	
        		$result = mysql_query($query);
				echo "<table border=1>";  
				echo "<tr>";  
					echo "<th>Nombre</th>";  
					echo "<th>Apellidos</th>";  
				echo "</tr>";  
				while ($row = mysql_fetch_row($result)){   
    				echo "<tr>";  
    					echo "<td>$row[0]</td>";  
    					echo "<td>$row[1]</td>";  
    				echo "</tr>";  
				}  
				echo "</table>";  
			?>
        </div>
        <div>
        	<a href="registroCliente.php">Agregar clientes</a>
        </div>
        <div>
        	<a href="logout.php">Cerrar Sesi&oacute;n</a>
        </div>
        
        
    </body>
</html>

