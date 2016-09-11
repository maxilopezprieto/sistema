<?php
    $titulo = "Panel de control - Categorías";
    require "conexion.php";
    $sql = "SELECT cat_id, cat_nombre 
            FROM categorias";
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
        <table style="width: 400px;" id="panel">
            <tr>
                <th>Id</th>
                <th >Nombre</th>
                <th width="30" colspan="2"><a href="form-alta-categoria.php"><img src='imgs/add.png'></a></th>
            </tr>
				<?php
					while ($fila = mysqli_fetch_assoc($resultado)){?>
                        <tr>
                        <td width="30" class="lista"><?php echo $fila['cat_id']?></td>
                        <td class="lista"><?php echo $fila['cat_nombre']?></td>
                        <td class="lista"><a href="form-editar-categoria.php?cat_id=<?php echo $fila['cat_id']?>"><img src='imgs/editar3.png'></a></td>
                        <td class="lista"><a href="form-borrar-categoria.php?cat_id=<?php echo $fila['cat_id']?>"><img src='imgs/borrar.png'></a></td>
                        </tr>
                <?php }?>
            <tr>
                <td class="pie" colspan="4">
                    Se han encontrado <?php echo $cantidad;?> registros
                </td>
            </tr>
        </table>
		        <?php } else {?>
        	<table style="width: 300px;" id="panel">
            <tr>
            	<th>Agregar categorias</th>
                <th colspan="2"><a href='form-alta-categoria.php'><img src='imgs/add.png'></a></th>
            </tr>        		
        	</table>
        <?php }
        ?>        
        
        
    </div>
    <div id="pie">
        <?php  include "pie.php"  ?>
    </div>
    
</body>
</html>