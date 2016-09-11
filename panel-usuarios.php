<?php
    $titulo = "Panel de control - Usuarios";
    require "conexion.php";
    $sql = "SELECT usu_id, usu_nombre, usu_email FROM usuarios";
    $resultado = mysqli_query($link, $sql) or die (mysqli_error($link));
    $cantidad = mysqli_num_rows($resultado);

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
                <th>ID Usuario</th>
                <th>Nombre</th>
                <th>E-mail</th>
                <th colspan="2"><a href='form-alta-usuario.php'><img src='imgs/add.png'></a></th>
            </tr>
				<?php
					while ($fila = mysqli_fetch_assoc($resultado)){?>
                        <tr>
                        <td class="lista"><?php echo $fila['usu_id']?></td>
                        <td class="lista"><?php echo $fila['usu_nombre']?></td>
                        <td class="lista"><?php echo $fila['usu_email']?></td>
                        <td class="lista"><a href="form-editar-usuario.php?usu_id=<?php echo $fila['usu_id']?>"><img src='imgs/editar3.png'></a></td>
                        <td class="lista"><a href="form-borrar-usuario.php?usu_id=<?php echo $fila['usu_id']?>"><img src='imgs/borrar.png'></a></td>
                        </tr>
                <?php }?>
            <tr>
                <td class="pie" colspan="5">
                    Se han encontrado <?php echo $cantidad;?> registros
                </td>
            </tr>
        </table>
        <?php } else {?>
        	<table style="width: 300px;" id="panel">
            <tr>
            	<th>Agregar usuarios</th>
                <th colspan="2"><a href='form-alta-usuario.php'><img src='imgs/add.png'></a></th>
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