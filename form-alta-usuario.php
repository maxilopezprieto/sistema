<?php
	$titulo = "Panel de control - Alta Usuarios";
?>
<?php include "encabezado.php"; ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"; ?>
	</div>
	<div id="main">
		<h1><?php echo $titulo ; ?></h1>
		<!-- inicio del desarrollo -->
		<form action="alta-usuario.php" method="post">
			<table id="paneles">
				<tr>
					<td>Nombre y Apellido*</td>
					<td><input type="text" name="usu_nombre" required="yes"></td>
				</tr>
				<tr>
					<td>Nombre de usuario*</td>
					<td><input type="text" name="usu_login" required="yes"></td>
				</tr>
				<tr>
				<tr>
					<td>Constraseña*</td>
					<td><input type="password" name="usu_clave" required="yes"></td>
				</tr>
				<tr>
					<td>E-mail*</td>
					<td><input type="email" name="usu_email" required="yes"></td>
				</tr>
					<td colspan="2" class="centrar">
						<input type="submit" value="Agregar categoria">
					</td>
				</tr> 									
			</table>
		</form>		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>