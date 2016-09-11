<?php
	$titulo = "Página Principal";
	require "conexion.php";
	$sql = "SELECT prd_id, prd_nombre, prd_descripcion, prd_precio, prd_foto1 
			FROM productos";
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
		
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>