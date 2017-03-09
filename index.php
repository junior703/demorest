<?php
$db_host = "jnc6n3xpbgc3kek2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$db_name = "mrmmjercn0t6zy7r";
$db_user = "gzkefyx4beash2ge";
$db_password = "vjs58dhu3pasmilz";

$connection = mysqli_connect("jnc6n3xpbgc3kek2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com" ,"mrmmjercn0t6zy7r", "gzkefyx4beash2ge", "vjs58dhu3pasmilz") or die("Connection Error: " . mysqli_error());
mysqli_select_db($connection,$db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
@mysqli_query("SET NAMES 'utf8'");

if(isset($_POST["id_contacto"])){

$id_contacto = $_POST["id_contacto"];
$sql_query = "SELECT * FROM contactos WHERE id_contacto=$id_contacto;";
$result = mysqli_query($sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($connection, $result)) {
$rows[] = $r;
}
print json_encode($rows);
}else
echo "No existe el contacto";
mysqli_close($connection);
?>