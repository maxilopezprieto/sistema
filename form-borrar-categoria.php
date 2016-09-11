<?php
	$titulo = "Panel de control - Eliminar Categoría";
	require "conexion.php";
	$cat_id = $_GET['cat_id'];
	$sql = "SELECT cat_id, cat_nombre
        FROM categorias 
        WHERE cat_id = ".$cat_id."";
	$resultado = mysqli_query($link, $sql) or die (mysqli_error($link));
	
	$sql = "SELECT cat_id
		FROM productos
		WHERE cat_id = ".$cat_id;
	$control = mysqli_query($link, $sql) or die (mysqli_error($link));
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
		<!-- inicio del desarrollo !-->
		<?php $fila = mysqli_fetch_assoc($resultado)?>
	
    <form action="borrar-categoria.php" method="post" onsubmit="return confirmarBaja()">
    <table style="width: 500px;" id="panel">
        <tr>
            <th colspan="2" ><?php if($chequeo <= 0){
	            	echo "Se va a dar de baja la siguiente categoria";
            } else {
            		echo "No se puede eliminar la categoría porque hay productos vinculados a ella";
            }?>
			</th>
        </tr>
        <tr>
            <th>Nombre</th>
            <td style="text-align:left;"><?php echo $fila['cat_id']?></td>
        </tr>
        <tr>
            <th>Descripcion</th>
            <td style="text-align:left;"><?php echo $fila['cat_nombre']?></td>
        </tr>
            <td colspan="2" class="center">
            <input type="hidden" name="cat_id" value="<?php echo $cat_id?>">
            </td>
        <?php if($chequeo <= 0){?>
        <tr>
            <td colspan="2" class="centrar"><input type="submit" value="Confirmar Baja"</td>
        </tr>
        <?php }?>
    </table>
    </form>	
    
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
<script type="text/javascript" src="funciones.js"></script>		
</body>
</html>