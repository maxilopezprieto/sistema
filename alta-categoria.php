<?php
$titulo = "Panel de control - Proyecto integrador";
require "conexion.php";
$cat_nombre = $_POST['cat_nombre'];
$sql = "INSERT INTO categorias VALUES (NULL, '".$cat_nombre."');";
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
    <?php
        if ($chequeo == 1){
            echo "Se ha agregado la categoría ",$cat_nombre;
            echo "<br><a href='panel-categorias.php'>Volver</a>";
        }
    ?>


</div>
<div id="pie">
    <?php  include "pie.php"  ?>
</div>

</body>
</html>