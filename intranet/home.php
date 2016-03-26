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
                     <li><a href="guias.php">Guias</a></li>                     
                     <li><a href="#">Almacen</a></li>                     
                     <li><a href="pagos.php">Pagos</a></li>
                     <li><a href="galeria.php">Galeria</a></li>
                     <li><a href="precios.php">Tarifas</a></li>
                     <li><a href="destruir.php"><font color="#0000FF">Cerrar Admin Center</font></a></li>
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
  
                             <table width="200" border="0" align="center">
  <tr>
    <td><a href="clientes.php"><img src="img/clientes.png" width="165" height="165" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=70"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"/></a>
    </td>
    <td><a href="guias.php"><img src="img/guia.png" width="165" height="165" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=70"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"/></a>
    </td>
    <td><a href="no.php"><img src="img/almacen.png" width="165" height="165" style="opacity:0.6;filter:alpha(opacity=60)"/></a></td>
    <td><a href="pagos.php"><img src="img/pagos.png" width="165" height="165" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=70"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100""/></a></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href="no.php"><img src="img/galeria.png" width="165" height="165" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity=70"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100""/></a></td>
    <td><a href="no.php"><img src="img/tutorial.png" width="165" height="165" style="opacity:0.6;filter:alpha(opacity=60)"/></a></td>
    <td><a href="no.php"><img src="img/imprimir.png" width="165" height="165" style="opacity:0.6;filter:alpha(opacity=60)"/></a></td>
    <td>&nbsp;</td>
  </tr>
                  </table>
   
                                 
                                
                                

 
 
 
 
                  
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