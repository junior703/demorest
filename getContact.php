<?php
$db_host = "localhost";
$db_name = "agenda";
$db_user = "root";
$db_password = "7890";
$connection = mysql_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysql_error());
mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
@mysql_query("SET NAMES 'utf8'");

if(isset($_POST["id_contacto"])){

$id_contacto = $_POST["id_contacto"];
$sql_query = "SELECT * FROM contactos WHERE id_contacto=$id_contacto;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
$rows[] = $r;
}
print json_encode($rows);
}else
echo "No existe el contacto";
mysql_close($connection);
?>