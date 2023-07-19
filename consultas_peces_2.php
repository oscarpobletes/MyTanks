<HTML>
<H1 STYLE="COLOR:black;"><center>RESULTADOS DE CONSULTA</center></H1><br>
<BODY bgcolor="green">
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
$fnum=$_POST['fnum'];
    $q_consultar="SELECT F.fnum, F.fnombre, 
		F.fcolor, F.fpeso, T.tnombre, S.snombre 
		FROM fish F, tank T, species S 
		WHERE F.tnum = T.tnum and 
			S.snum = F.snum and F.fnum = $fnum";

    $r_consultar = pg_Exec($conn, $q_consultar);

    $numrows = pg_numrows($r_consultar);
    $rowc = pg_fetch_array($r_consultar, 0,PGSQL_NUM);


    if(!$r_consultar){
      echo "Error al consultar<br>\n";
      echo "<input type=\"button\" name=\"b_regresar\" value=\"Regresar\" onClick=\"window.location='inicio.php'\">\n";
      exit;
    }


   $fnum=$rowc[0];
   $fnombre =$rowc[1];
   $fcolor =$rowc[2];
   $fpeso=$rowc[3];
   $tnombre =$rowc[4];
   $snombre =$rowc[5];


 ?>
<TABLE>
<TR>
<TD><b>NOMBRE:</b> </TD>
<TD><?echo $fnombre?></TD>
</TR> 
<TR>
<TD><b>NUMERO:</b></TD>
<TD><?echo $fnum?></TD>
<TR>
<TD><b>COLOR:</b> </TD> 
<TD><?echo $fcolor?></TD>
</TR>
<TR>
<TD><b>PESO:</b> </TD> 
<TD><?echo $fpeso?></TD>
</TR>
<TR>
<TD><b>TANQUE:</b> </TD>
<TD><?echo $tnombre?></TD>
</TR>
<TR>
<TD><b>ESPECIE:</b> </TD>
<TD><?echo $snombre?></TD>
</TR>

</TABLE>
</BODY>
</HTML>
