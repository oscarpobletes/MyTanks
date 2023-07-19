<html>

<head>

<title>

altas peces

</title>

</head>

<body>

<form>

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

else

echo "conexión exitosa <br>";

$nombre =$_POST['nombre'];

$numero =$_POST['numero'];

$color = $_POST['color'];

$peso =$_POST['peso'];

$tanque =$_POST['tanque'];

$especie =$_POST['especie'];

echo "Los datos del pez son: $nombre, $numero, $color, $peso, $tanque, $especie \n";

echo "<br>";

$q_insertar="INSERT INTO fish(fnum, fnombre, fcolor, fpeso, tnum, snum)

VALUES('$numero', '$nombre', '$color', $peso, $tanque, $especie);";

$r_insertar = pg_Exec($conn, $q_insertar);

echo "q_insertar=$q_insertar<br>\n";

if(!$r_insertar){

echo "Error al insertar en tabla fish<br>\n";

echo "q_insertar=$q_insertar<br>\n";

echo "<input type=\"button\" name=\"b_regresar\"

value=\"Regresar\" onClick=\"window.location='inicio.php'\">\n";

exit;

}

else

?>

<TABLE BORDER="1" align = "center" width="400">

<TR><TH>DATOS INSERTADOS</TD></TR>

</TABLE>

</form></body></html>
