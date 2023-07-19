<html>

<head><title>bajas_peces</title></head>

<body bgcolor="FFE800">

<form method="post" action="bajas_peces_2.php">

<?PHP

error_reporting(E_ALL);

ini_set('display_errors','On');

$user ="";

$password="";

$host="localhost";

$port="5432";

$dbname="";

$strconn="host=$host port=$port dbname=$dbname user=$user password=$password";

$conn=pg_Connect($strconn);

if(!$conn)

{ echo "no se conecto a la base\n";

exit;

}

//obtener, los datos de la tabla fish

$q_s_fish = "SELECT * FROM fish";


$result_fish=pg_Exec($conn,$q_s_fish);

if(!$result_fish){

echo "Error en obtenci<F3>n de la tabla fish<br>\n";

exit;

}

$rows=pg_NumRows($result_fish);



?>

<div align="center">

<table width="75%" border="1">

<tr><td><div align="center">Seleccione un pez:</div>

</td></tr>

<tr><td><div align="center">

<select name="fnum" size="5">

<?PHP

for($i=0; $i<$rows; $i++){

$fnum =pg_Result($result_fish, $i, "fnum");

$fnombre=pg_Result($result_fish, $i, "fnombre");

echo "<option value=\"$fnum\"> $fnum $fnombre\n";

}//for

?>

</select></div></td></tr>

<tr><td><div align="center">

<input type="submit" name="baja" value="DAR DE BAJA">

</div></td></tr>

<?PHP

echo "<tr><td colspan=\"2\">\n";

echo "<div align=\"center\">\n";

echo "<input type=\"button\" name=\"b_regresar\" value=\"Regresar\" onClick=\"window.location='inicio.php'\">\n";

echo "</div></td></tr>\n";

?>

</table></div>

</form></body></html>
