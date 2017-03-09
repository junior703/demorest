<?php
$db_host = "jnc6n3xpbgc3kek2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$db_name = "mrmmjercn0t6zy7r";
$db_user = "gzkefyx4beash2ge";
$db_password = "vjs58dhu3pasmilz";

$connection = mysqli_connect($db_host ,$db_name, $db_user, $db_password);

mysqli_select_db($connection,$db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
@mysqli_query("SET NAMES 'utf8'");

$sql_query = "SELECT * FROM contactos";
$result = mysqli_query($connection, $sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($connection, $result)) {
$rows[] = $r;
}
print json_encode($rows);

?>