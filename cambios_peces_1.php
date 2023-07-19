
<html>

<head><title>cambios_peces</title></head>

<body bgcolor="cyan">

<form method="post" action="cambios_peces_2.php">

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
<h1><center>CAMBIOS PECES</center></h1>
<TABLE>
<TR><TD>NOMBRE DEL PEZ :
<?PHP
//obtener, los datos de la tabla fish

$q_s_fish = "SELECT * FROM fish";

$result_fish=pg_Exec($conn,$q_s_fish);

if(!$result_fish){

echo "Error en obtenci<F3>n de la tabla fish<br>\n";

exit;

}

$rows=pg_NumRows($result_fish);

?>

<SELECT NAME="finum">

  <?PHP

for($i=0; $i<$rows; $i++){

$fnum =pg_Result($result_fish, $i, "fnum");

$fnombre=pg_Result($result_fish, $i, "fnombre");

echo "<option value=\"$fnum\"> $fnum $fnombre\n";

}//for

?>

</TD>

</SELECT>

</TR>


<TR><TD>COLOR:</TD>

<TD><INPUT type="Text" name="ficolor" align="LEFT"

size="20" maxlength="30"></TD>

</TR>

<TR><TD>PESO :</TD>

<TD><INPUT type="Text" name="fipeso" align="LEFT"

size="20" maxlength="30"></TD>

</TR>
<TR><TD>ESPECIE :
<?PHP
//obtener, los datos de la tabla species

$q2_s_fish = "SELECT * FROM species";

$result2_fish=pg_Exec($conn,$q2_s_fish);

if(!$result2_fish){

echo "Error en obtenci<F3>n de la tabla species<br>\n";

exit;

}

$rowss=pg_NumRows($result2_fish);

?>

<SELECT NAME="fispecie">

  <?PHP

for($i=0; $i<$rowss; $i++){

$snum=pg_Result($result2_fish, $i, "snum");

$snombre=pg_Result($result2_fish, $i, "snombre");

echo "<option value=\"$snum\"> $snum $snombre\n";

}//for

?>
</TR>
<TR><TD>TANQUE :
<?PHP
//obtener, los datos de la tabla species

$q3_s_fish = "SELECT * FROM tank";

$result3_fish=pg_Exec($conn,$q3_s_fish);

if(!$result3_fish){

echo "Error en obtenci<F3>n de la tabla species<br>\n";

exit;

}

$rowsz=pg_NumRows($result3_fish);

?>


<SELECT NAME="fitanque">

  <?PHP

for($i=0; $i<$rowsz; $i++){

$tnum=pg_Result($result3_fish, $i, "tnum");

$tnombre=pg_Result($result3_fish, $i, "tnombre");

echo "<option value=\"$tnum\"> $tnum $tnombre\n";

}//for

?>

</TD>

</SELECT>
<tr><td><INPUT type="Submit" name="c_submit" value="Enviar cambios"></td></tr>

</TABLE>
<?PHP
 echo "<input type=\"button\" name=\"b_regresar\" value=\"Regresar\" onClick=\"window.location='inicio.php'\">\n";
?>
</form>

</body>

</html>
