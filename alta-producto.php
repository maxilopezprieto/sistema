<?php
$titulo = "Panel de control - Proyecto integrador";
$ruta = 'imagenes/';
$prd_foto1 = 'noDisponible1.png';
$prd_foto2 = 'noDisponible2.png';

if ($_FILES['prd_foto1']['error'] == 0){
    $prd_foto1TMP = $_FILES['prd_foto1']['tmp_name'];
    $prd_foto1 = $_FILES['prd_foto1']['name'];
    move_uploaded_file($prd_foto1TMP, $ruta.$prd_foto1);
}
if ($_FILES['prd_foto2']['error'] == 0){
    $prd_foto2TMP = $_FILES['prd_foto2']['tmp_name'];
    $prd_foto2 = $_FILES['prd_foto2']['name'];
    move_uploaded_file($prd_foto2TMP, $ruta.$prd_foto2);
}

require "conexion.php";
$prd_nombre = $_POST['prd_nombre'];
$prd_descripcion = $_POST['prd_descripcion'];
$prd_precio = $_POST['prd_precio'];
$cat_id = $_POST['cat_id'];
$fecha = date('Y-m-d');
$sql = "INSERT INTO productos VALUES (NULL, '".$prd_nombre."', '".$prd_descripcion."', '".$prd_precio."', '".$cat_id."', '".$fecha."', '".$prd_foto1."', 
            '".$prd_foto2."');";
$resultado = mysqli_query($link, $sql) or die (mysqli_error($link));
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
    <table style="width: 300px;" id="panel">
        <tr>
            <th width="30" colspan="2" >Se ha dado de alta el siguiente producto</th>
        </tr>
            <tr>
                <th width="100"">Nombre</th>
                <td style="text-align:left;"><?php echo $prd_nombre?></td>
            </tr>
        <tr>
            <th width="100">Descripcion</th>
            <td style="text-align:left;"><?php echo $prd_descripcion?></td>
        </tr>
        <tr>
            <th width="100">Precio</th>
            <td style="text-align:left;"><?php echo $prd_precio?></td>
        </tr>
        <tr>
            <th width="100">Miniatura</th>
            <td style="text-align:left;"><img src="imagenes/<?php echo $prd_foto1?>"</td>
        </tr>
    </table>
<a href="form-alta-producto.php">Agregar otro producto</a><br>
<a href="index.php">Volver al panel</a>


</div>
<div id="pie">
    <?php  include "pie.php"  ?>
</div>

</body>
</html>