<?php 
include "conexion.inc.php";
$usuario_sesion = $_GET['usuario'];

// buscando quien es el unico usuario en el sistem
$sql = "select * from rol where descipcion='Alumno'";
$res = mysqli_query($con, $sql);
$fil = mysqli_fetch_array($res);

// ahora en rolusuario buscar al codUsuario
$sql = "select * from rolusuario where IdRol='".$fil['id']."'";
$res = mysqli_query($con, $sql);
$fil = mysqli_fetch_array($res);

// print_r($fil);
// ahora si buscando el handle del usuario
$sql = "select * from usuario where id='".$fil['IdUsuario']."'";
$res = mysqli_query($con, $sql);
$fil = mysqli_fetch_array($res);
// print_r($fil);
$usuario_en_el_sistema =  $fil['descripcion']; // es unico
$codigo = $fil['id'];
// echo $codigo;
// verificando si ese usuario deposito ese monto


$sql = "select * from academico2p.certificado_generado where id='".$codigo."'";
$res = mysqli_query($con, $sql);
$fil = mysqli_fetch_array($res);
// print_r($fil);
?>