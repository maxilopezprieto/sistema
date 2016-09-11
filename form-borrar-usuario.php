<?php
	$titulo = "Panel de control - Eliminar Usuario";
	require "conexion.php";
	$usu_id = $_GET['usu_id'];
	$sql = "SELECT usu_nombre,  usu_login, usu_email 
        FROM usuarios 
        WHERE usu_id = ".$usu_id."";
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
    <form action="borrar-usuario.php" method="post" onsubmit="return confirmarBaja()">
    <table style="width: 500px;" id="panel">
        <tr>
            <th colspan="2" >Se va a dar de baja el siguiente usuario</th>
        </tr>
        <tr>
            <th>Nombre y Apellido</th>
            <td style="text-align:left;"><?php echo $fila['usu_nombre']?></td>
        </tr>
        <tr>
            <th>Nombre de Usuario</th>
            <td style="text-align:left;"><?php echo $fila['usu_login']?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td style="text-align:left;"><?php echo $fila['usu_email']?></td>
        </tr>
        </tr>
            <td colspan="2" class="center">
            <input type="hidden" name="usu_id" value="<?php echo $usu_id?>">
            </td>
        <tr>
            <td colspan="2" class="centrar"><input type="submit" value="Confirmar Baja"</td>
        </tr>
    </table>
    </form>
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
<script type="text/javascript" src="funciones.js"></script>	
</body>
</html>