<?php
	$titulo = "Panel de control - Alta de usuario";
	require "conexion.php";
	$usu_nombre = $_POST['usu_nombre'];
	$usu_login = $_POST['usu_login'];
	$usu_clave = $_POST['usu_clave'];
	$usu_email = $_POST['usu_email'];
	$sql = "INSERT INTO usuarios VALUES (NULL, '".$usu_nombre."', '".$usu_login."', '".$usu_clave."', '".$usu_email."');";
	$resultado = mysqli_query($link, $sql) or die (mysqli_error($link));
	$chequeo = mysqli_affected_rows($link);
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
            echo "Se ha dado de alta con éxito";
            header("refresh:3; url=panel-usuarios.php");
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