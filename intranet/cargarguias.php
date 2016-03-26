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
                   
              <?php
			  
			  	if(isset($_POST['cargar']))
				{
					$usuario	= $_POST['usuario'];
					$tracking 	= $_POST['tracking'];	
					$estatus	= $_POST['estatus'];	
					$des 		= $_POST['des'];	
					
					
						
				require("cnx.php");
							mysql_query ("INSERT INTO guias VALUES 
							('', '$usuario','$tracking','$estatus','$des')");
							mysql_close ($conexion);
							
							
							?>
              <table width="303" border="0" align="center">
                              <tr>
                                <td><p><strong>EL TRACKING SE HA CARGADO CON EXITO</strong></p>
                                <p><a href="clientes.php">Click Aqui Para Volver al area de clientes</a></p></td>
                              </tr>
                            </table>
<?php 
				}
				else
				{
				?>	
				  
                   
<form method="post" action="#">
                             <table width="340" border="0" align="center">
                                  <tr>
                                    <td width="142">Usuario:</td>
                                    <td width="46" align="left"><input name="usuario" type="text" id="usuario" value="<?php echo $_POST['cargarguias']?> " size="2" readonly="readonly" /></td>
                               </tr>
                                  <tr>
                                    <td>Nº de Tracking:</td>
                                    <td align="left"><input name="tracking" type="text" id="tracking" /></td>
                                  </tr>
                                  <tr>
                                    <td>Estatus:</td>
                                    <td align="left"><input type="text" name="estatus" id="estatus" /></td>
                                  </tr>
                                  <tr>
                                    <td>Descripcion:</td>
                                    <td><textarea name="des" id="des" cols="30" rows="5"></textarea></td>
                                  </tr>
                  </table>
                  <br />
                  <table width="200" border="0" align="center">
                    <tr>
                      <td><input type="submit" name="cargar" id="cargar" value="Cargar" /></td>
                      <td><input type="reset" name="button2" id="button2" value="Cancelar" /></td>
                    </tr>
                  </table>
        <br />
          </form>        
                  
                <?php
                }			  
			  ?>     
                   
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