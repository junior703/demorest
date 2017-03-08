<?php
$db_host = "jnc6n3xpbgc3kek2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$db_name = "mrmmjercn0t6zy7r";
$db_user = "gzkefyx4beash2ge";
$db_password = "vjs58dhu3pasmilz";
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