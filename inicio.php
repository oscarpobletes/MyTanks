<HTML>
<!-- Link: https://lab.anahuac.mx/~a00426099/website_db_aquarium/inicio.php -->
<HEAD>

<TITLE>INICIO</TITLE>

<?PHP

include("style.php");

?>

</HEAD>

<style>
body {
	background-image: url("acuarium.jpeg");
	background-size: 180%;
	background-position: center;
	background-repeat: no-repeat;
}
</style>

<DIV ALIGN="center">

<P><B>SISTEMA PARA ALTAS, BAJAS, CONSULTAS Y MODIFICACIONES DE PECES EN EL ACUARIO</B></P>
<p>Por: Óscar Poblete Sáenz</p>

<FORM METHOD=post ACTION="procesa_acuario.php">

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

if (!$conn) {

echo "No hay conexi<F3>n a la base de datos.\n";

exit;

}

echo "<TABLE width=\"100%\"><TR><td colspan=\"2\"><div align=\"center\">SELECCIONAR TIPO DE

MOVIMIENTO</div></td></TR>\n";


echo "<tr><td width=\"2\"></td><td>\n";

echo "<div align=\"center\">\n";

echo "<input type=\"submit\" name=\"boton\" value=\"ALTAS\">\n";

echo "</div></td></tr>\n";

echo "<tr><td></td><td>\n";

echo "<div align=\"center\">\n";

echo "<input type=\"submit\" name=\"boton\" value=\"BAJAS\">\n";

echo "</div></td></tr>\n";

echo "<tr><td></td><td>\n";

echo "<div align=\"center\">\n";

echo "<input type=\"submit\" name=\"boton\" value=\"CAMBIOS\">\n";

echo "</div></td></tr>\n";

echo "<tr><td></td><td>\n";

echo "<div align=\"center\">\n";

echo "<input type=\"submit\" name=\"boton\" value=\"CONSULTAS\">\n";

echo "</div></td></tr>\n";

?>

</TABLE>

</FORM>

</DIV>

</BODY>

</HTML>
