<html>

<head><title>b_peces</title></head>

<body>

<form method="post">

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

$fnum =$_POST['fnum'];

print "fnum para borrar $fnum";

//include("style.html");

$q_delete="DELETE FROM fish

WHERE fnum = $fnum";

$r_delete = pg_Exec($conn, $q_delete);

if(!$r_delete){

echo "Error al eliminar producto<br>\n";

echo "q_delete=$q_delete<br>\n";

echo "<input type=\"button\" name=\"b_regresar\" value=\"Regresar\" onClick=\"window.location='inicio.php'\">\n";

exit;

}

echo "<TABLE BORDER=\"1\" align = \"center\" width=\"400\">\n";

echo "<TR><TH>PEZ BORRADO</TD></TR>\n";

echo "</TABLE>\n";

?>

</form>

</body>

</html>
