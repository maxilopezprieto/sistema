<?php
$titulo = "Panel de control - Eliminar Producto";
require "conexion.php";
$prd_id = $_GET['prd_id'];
$sql = "SELECT prd_nombre,  prd_descripcion, prd_precio, prd_foto1 
        FROM productos 
        WHERE prd_id = ".$prd_id;
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
    <?php $fila = mysqli_fetch_assoc($resultado)?>
    <form action="borrar-producto.php" method="post" onsubmit="return confirmarBaja()">
    <table style="width: 500px;" id="panel">
        <tr>
            <th colspan="2" >Se va a dar de baja el siguiente producto</th>
        </tr>
        <tr>
            <th>Nombre</th>
            <td style="text-align:left;"><?php echo $fila['prd_nombre']?></td>
        </tr>
        <tr>
            <th>Descripcion</th>
            <td style="text-align:left;"><?php echo $fila['prd_descripcion']?></td>
        </tr>
        <tr>
            <th>Precio</th>
            <td style="text-align:left;"><?php echo $fila['prd_precio']?></td>
        </tr>
        <tr>
            <th>Miniatura</th>
            <td style="text-align:left;"><img src="imagenes/<?php echo $fila['prd_foto1']?>"</td>
        </tr>
            <td colspan="2" class="center">
            <input type="hidden" name="prd_id" value="<?php echo $prd_id?>">
            </td>
        <tr>
            <td colspan="2" class="centrar"><input type="submit" value="Confirmar Baja"</td>
        </tr>
    </table>
    </form>
</div>
<div id="pie">
    <?php  include "pie.php"?>
</div>
<!--Llamados a JS-->
<script type="text/javascript" src="funciones.js"></script>
</body>
</html>