<?php
	$titulo = "Panel de control - Proyecto integrador";
	require "conexion.php";
	$sql = "SELECT cat_id, cat_nombre
			FROM categorias";
	$resultado = mysqli_query($link, $sql) or die (mysqli_error($link));
	mysqli_close($link);
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
		<form action="resultado.php" method="POST">
			<table id="paneles">
				<tr>
					<th colspan="2">Ingrese criterio de búsqueda</th>
				</tr>
				<tr>
				<td class="lista">Término</td>
				<td class="lista">
				<input type="text" name="buscar">
				</td>
				</tr>
				<tr>
					<td class="lista">Categoría</td>
				<td>

					<select name="cat_id">
						<?php while ($fila = mysqli_fetch_assoc($resultado)) {?>
							<option value='<?php echo $fila['cat_id'];?>'><?php echo $fila['cat_nombre']?></option>
						<?php } ?>
					</select>
				</td>
				</tr>
				<tr>
					<td class="lista centrar" colspan="2">
						<input type="submit" value="Buscar">
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