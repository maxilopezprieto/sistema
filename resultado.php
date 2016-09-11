<?php
	$titulo = "Panel de control - Proyecto integrador";
	require "conexion.php";
	$buscar = $_POST['buscar'];
	$cat_id = $_POST['cat_id'];
	$sql = "SELECT prd_nombre, prd_descripcion, prd_precio, prd_foto1 
			FROM productos 
			WHERE prd_nombre LIKE '%".$buscar."%' AND cat_id=".$cat_id;
	$resultado = mysqli_query($link, $sql) or die (mysqli_error($link));
	$cantidad = mysqli_num_rows($resultado);
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
		<?php if ($cantidad != 0){ ?>
		<table id="panel">
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Precio</th>
				<th>Imagen</th>
			</tr>

				<?php
					while ($fila = mysqli_fetch_assoc($resultado)){?>
						<tr>
						<td class="lista"><?php echo $fila['prd_nombre']?></td>
						<td class="lista"><?php echo $fila['prd_descripcion']?></td>
						<td class="lista"><?php echo $fila['prd_precio']?></td>
						<td class="lista"><img src='imagenes/<?php echo $fila['prd_foto1']?>'</td>
						</tr>
				<?php }?>
			<tr>
				<td class="pie" colspan="4">
					Se han encontrado <?php echo $cantidad;?> registros
				</td>
			</tr>
		</table>
		<?php } else { ?>
			<h2>No se han encontrado registros</h2>
		<?php }
		?>
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>