<?php
include("utilerias.php");
$conexion=conecta();//servidor y bd
$u=GetSQLValueString($_GET["txtUsuario"],"text");
$consulta=sprintf("delete from usuarios where usuario=%s",$u);
mysql_query($consulta);
if(mysql_affected_rows()>0){
	print("Baja aplicada :)");
}
else{
	print("Baja no aplicada :(");
}
?>