
<html>

<head><title>consultas_peces</title></head>
<H1 STYLE="COLOR:black;"><center>CONSULTA DE PECES</center></H1>
<body bgcolor="green">
	<div align="center">
<p STYLE="COLOR:orange;">Pez a consultar: </p>
<form method="post" action="consultas_peces_2.php">

<?PHP

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

<SELECT NAME="fnum">

  <?PHP

for($i=0; $i<$rows; $i++){

$fnum =pg_Result($result_fish, $i, "fnum");

$fnombre=pg_Result($result_fish, $i, "fnombre");

echo "<option value=\"$fnum\"> $fnum $fnombre\n";

}//for

?>

</SELECT>


<INPUT TYPE="submit" VALUE="aceptar"><br>
<?PHP
echo "<input type=\"button\" name=\"b_regresar\" value=\"Regresar\" onClick=\"window.location='inicio.php'\">\n";
?>
</div>
