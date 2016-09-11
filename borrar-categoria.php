<?php
	$titulo = "Panel de control - Eliminar Categoría";
	require "conexion.php";
	$cat_id = $_POST['cat_id'];
	$sql = "DELETE
        FROM categorias 
        WHERE cat_id = ".$cat_id;
	mysqli_query($link, $sql) or die (mysqli_error($link));
	$chequeo = mysqli_affected_rows($link);
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
		    <?php
        if ($chequeo == 1){
            echo "Se ha eliminado con éxito";
            header("refresh:3; url=panel-categorias.php");
        } else {
            echo "Ocurrió un error";
        }
    		?>
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>