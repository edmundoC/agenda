<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login</title>
		<script type="text/javascript" src="scripts/jquery-2.1.3.min.js"></script>
	</head>
	<body>
		<?php
			session_start();
			if(isset($_SESSION['usuario'])){	
				$usuario = $_SESSION['usuario'];
				?><span>Ya te encuentras logueado como: <?echo $usuario?></span>
				<?header("Refresh: 2; index.php");
			}else{
				?>
				<center><h1>Iniciar sesi&oacute;n</h1></center>
				<div id="login" align="center">
				<form action="logueo.php" method="post">
					<table>
						<tr>
							<td>Nombre de usuario:</td>
							<td><input id="txtUsuario" type="text" name="user"/></td>
						</tr>
						<tr>
							<td>Contrase&ntilde;a:</td>
							<td><input id="txtPass" type="password" name="pass"/></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" value="INGRESAR" name="enviar"/></td>
						</tr>
					</table>
				</form>
		</div>				
			<?}
		?>
	</body>
</html>

