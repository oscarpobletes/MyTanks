
<html>

<head><title>altas_peces</title></head>

<body bgcolor="FFA500">

<form method="post" action="alt_peces_2.php">

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

?>

<TABLE>

<TR><TH>ALTA NUEVOS PECES EN EL ACUARIO</TH></TR>

<TR><TD>NOMBRE DEL PEZ :</TD>

<TD><INPUT type="Text" name="nombre" align="LEFT"

size="60" maxlength="100"></TD>

</TR>

<TR><TD>NUMERO :</TD>

<TD><INPUT type="Text" name="numero" align="LEFT"

size="20" maxlength="30"></TD>

</TR>

<TR><TD>COLOR :</TD>

<TD><INPUT type="Text" name="color" align="LEFT"

size="20" maxlength="30"></TD>

</TR>

<TR><TD>PESO :</TD>

<TD><INPUT type="Text" name="peso" align="LEFT"

size="20" maxlength="30"></TD>

</TR>
?>
  
<TR><TD>TANQUE :</TD>
<?
//obtener, los datos de la tabla tank

$q_s_tank = "SELECT * FROM tank";

$result_tank=pg_Exec($conn,$q_s_tank);

if(!$result_tank){

echo "Error en obtenci<F3>n de la tabla tank<br>\n";

exit;

}

$rows=pg_NumRows($result_tank);
?>
<TD><SELECT NAME="tanque">

<?

for($i=0; $i<$rows; $i++){

$tnum =pg_Result($result_tank, $i, "tnum");

$tnombre=pg_Result($result_tank, $i, "tnombre");

echo "<option value=\"$tnum\"> $tnum $tnombre\n";

}

?></TD>

</TR>

<TR><TD>ESPECIE :</TD>
<?
//obtener, los datos de la tabla species

$q_s_species = "SELECT * FROM species";

$result_species=pg_Exec($conn,$q_s_species);

if(!$result_species){

echo "Error en obtenci<F3>n de la tabla species<br>\n";

exit;

}

$rows=pg_NumRows($result_species);
?>

<TD><SELECT NAME="especie">

<?

for($i=0; $i<$rows; $i++){

$snum =pg_Result($result_species, $i, "snum");

$snombre=pg_Result($result_species, $i, "snombre");

echo "<option value=\"$snum\"> $snum $snombre\n";

}

?></TD>
</TR>

<tr><td><INPUT type="Submit" name="c_submit" value="Enviar Datos"></td></tr>

</TABLE>

</form>
<?PHP
echo "<input type=\"button\" name=\"b_regresar\" value=\"Regresar\" onClick=\"window.location='inicio.php'\">\n";
?>
</body>

</html>
