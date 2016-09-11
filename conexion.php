<?php
define('SERVER','localhost');
define('USUARIO','root');
define('CLAVE','');
define('BASE','catalogo2');
$link = mysqli_connect(SERVER, USUARIO, CLAVE, BASE) or die (mysqli_connect_error());
mysqli_set_charset($link, "utf8");
?>