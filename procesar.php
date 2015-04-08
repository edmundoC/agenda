<?php
	include "config.php";
	session_start();
	if(isset($_POST['id'])){
		$idCliente = $_POST['id'];
		echo '<div class="ventana_flotante">';
			echo '<table border=1">';
				echo '<tr><th>Num Folio</th><th>Fecha de pago</th><th>Monto</th></tr>';
				$query = "SELECT num_folio, fecha_pago, monto from folios AS f, promesas AS p where f.id_cliente = '".$idCliente."' AND p.id_folio = f.id_folio";	
				$result = mysql_query($query);
				if(mysql_num_rows($result) != 0){
					while ($row = mysql_fetch_row($result)){
							echo "<tr>";
    						echo "<td>$row[0]</td>";
							echo "<td>$row[1]</td>";
							echo "<td>$row[2]</td>";
							echo "</tr>";
					}
				}
			echo '</table>';
		echo '</div>';	
	}
	else
		echo "Error, no recibi nada";
?>