<?php

//conexion con la BD y el servidor
$mysqli = new mysqli('localhost','root', '', 'alvamex') or die("<h2>No se encuentra el servidor</h2>");



//obtener valores del formulario
$codcli = $_POST['codigocliente'];
$rfc = $_POST['rfc'];
$nomcli = $_POST['nombre'];
$cp = $_POST['codigopostal'];
$codpais = $_POST['codigopais'];
$codest = $_POST['codigoestado'];
$codciu = $_POST['codciudad'];
$secciu = $_POST['codsec'];
$codmun = $_POST['codmun'];
$codloc = $_POST['codloc'];
$codcol = $_POST['codcol'];

//ingresar información a la BD
$insertarDatos = "INSERT INTO datcli VALUES('','$codcli', 
                                       '$rfc', 
                                       '$nomcli',
                                       '$cp',
                                       '$codpais',
                                       '$codest',
                                       '$codciu',
                                       '$secciu',
                                       '$codmun',
                                       '$codloc',
                                       '$codcol')";

$ejecutarInsertar = mysqli_query($mysqli, $insertarDatos);

echo '
<h2>Registro completo</h2>
<h5>Gracias por su información</h5>';
