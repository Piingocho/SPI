
<?php 

	$Idproducto=$_REQUEST['idproducto'];
	$Nombre=$_REQUEST['nombre'];
	$Costo=$_REQUEST['costo'];

	$conexion=mysql_connect("localhost",
		   "root","")
	or die("Problemas en la conexion");
	mysql_select_db("pagos",$conexion) or
	die("Problemas en la seleccion de la base de datos");

	mysql_query("insert into inventario(idproducto, nombre, costo) values
   ('$Idproducto','$Nombre', '$Costo')",
   $conexion) or die("Problemas en el select".mysql_error());
	mysql_close($conexion);

	echo "Datos Guardados";

?>