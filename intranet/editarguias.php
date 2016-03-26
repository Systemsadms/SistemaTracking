<?php
session_start();
if ($_SESSION['admin'] == 'clglobalcargo')
{
include ("cnx.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="menu/ajxmenu.css" type="text/css" />
</head>

<body>


<div id="Marcocosmo">
<div id="MarcoGlobal">



                <div id="modulotop">
                
                	<div id="logo"></div>
                    <div id="titulo">
                    Sistema de Control de Usuarios, Tracking y Envios.
                    <br /><br />
                    CUTE v2.0
                    </div>
                
                
                </div><!--FIN DE modulotop-->
                
                
                <div id="menu">
                
 <div class="AJXMenuWJcNLQA"><!-- AJXFILE:menu/ajxmenu.css -->
 <div class="ajxmw1">
  <div class="ajxmw2">
<ul>
<li class="tfirst"><a href="home.php">Home</a></li>
                     <li><a href="clientes.php">Clientes</a></li>
                     <li><a href="#">Guias</a></li>                     
                     <li><a href="#">Almacen</a></li>                     
                     <li><a href="#">Pagos</a></li>
                     <li><a href="#">Galeria</a></li>
                     <li><a href="#">Ayudas y Tutoriales</a></li>
                     <li><a href="../index.php"><font color="#0000FF">Cerrar Admin Center</font></a></li>
</ul>
  </div>
 </div>
 <br />
 
 
 
 
 
 
</div>
                                    
</div><!--FIN DE MARCO menu-->
                
                
                
                
                
                <div id="sparacion"></div><!--FIN DE  sparacion-->
                
                
                
                
                
                
                <div id="contenido">
                  <table width="530" border="0" align="center">
                    <tr>
                      <td width="433" align="center"><em><strong><font color="#999999">Sistema de Control de Usuarios y Carga de Tracking. v2.0</font></strong></em></td>
                    </tr>
                  </table>
                  
                   <br /><br />
                 					<?php
					
						include ("cnx.php");	
								
								$id2 = $_POST['cargarguias'];
								
								
								$consulta = "SELECT * FROM guias WHERE usuario ='$id2';";
								$hacerconsulta=mysql_query ($consulta,$conexion);
								
								echo "<table border='3' bordercolor='#FF0000' align='center'>";
								echo "<tr>";
								echo "<td align='center'><b>N° Guia</b></td>";
								echo "<td align='center'><b>User</b></td>";
								echo "<td align='center'><b>Tracking Number</b></td>";
								echo "<td align='center'><b>Estatus</b></td>";
								echo "<td align='center'><b>Descripcion</b></td>";

								
				
				
								echo "</tr>";
								
								
								$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
								
								while ($reg)
								{
								echo "<tr>";	
								echo "<td align='center'>".$reg[0]."</td>";
								echo "<td align='center'>".$reg[1]."</td>";
								echo "<td align='center'>".$reg[2]."</td>";
								echo "<td align='center'>".$reg[3]."</td>";
								echo "<td align='center'>".$reg[4]."</td>";


				
				
								$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
								echo "</tr>";
								}
								echo "</table>";
								mysql_close($conexion);
									?> 
                                    
                                    
                                    <br /><br />
                 
                  <form method="post" action="editarguias2.php">
                                	<p align="center"><strong><em>INTRODUZCA EL N° DE GUIA QUE DESEA EDITAR</em></strong></p>                                    
                                   
                                    <table width="200" border="0" align="center">
                                      <tr>
                                        <td align="center">N° Guia:</td>
                                        <td><label for="ideditar"></label>
                                        <input name="ideditar" type="text" id="ideditar" size="4" />
                                        </td>
                                        <td>
                                        <input type="submit" name="editarid" value="Editar" /></td>
                                      </tr>
                                    </table>
			      </form> 
                 
                 
                 
                 
                 
                  <br /><br /><bvr>
    </div><!--FIN DE  contenido-->


</div><!--FIN DE MARCOMarcoGlobal-->
</div><!--FIN DE MARCO MarcocosmoGLOBAL-->



<?php			
}
else
{			
session_destroy();		
header("location:../index.php");	
}
?>	
</body>
</html>