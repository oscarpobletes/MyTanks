<html>

<head>

<title>

cambios peces

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


$finum =$_POST['finum'];

$ficolor = $_POST['ficolor'];

$fipeso =$_POST['fipeso'];

$fispecie =$_POST['fispecie'];

$fitanque =$_POST['fitanque'];


$q_cambio="UPDATE fish SET fpeso=$fipeso,fcolor='$ficolor',snum=$fispecie,tnum=$fitanque where fnum=$finum;";

$r_cambio = pg_Exec($conn, $q_cambio);

if(!$r_cambio){

echo "Error al cambiar valores<br>\n";

echo "<input type=\"button\" name=\"b_regresar\"

value=\"Regresar\" onClick=\"window.location='inicio.php'\">\n";

exit;

}



?>
<TABLE BORDER="1" align = "center" width="400">

<TR><TH>DATOS CAMBIADOS:</TD></TR>
<TR>
<TD><b>COLOR:</b></TD>
<TD><?echo $ficolor?></TD>
<TR>
<TD><b>PESO:</b> </TD> 
<TD><?echo $fipeso?></TD>
</TR>
<TD><b>TANQUE:</b> </TD> 
<TD><?echo $fitanque?></TD>
</TR>
<TD><b>ESPECIE:</b> </TD> 
<TD><?echo $fispecie?></TD>
</TR>

</TABLE>

</form></body></html>


