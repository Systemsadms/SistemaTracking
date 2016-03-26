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
                  
                  
                  
                   <?php
								 if(isset ($_POST["editarid"]))
									{
										$id 	= $_POST["ideditar"];										
						
										require ("cnx.php");
										$ssql = mysql_query("SELECT * FROM guias WHERE id='$id'");
										
										
										if (mysql_num_rows($ssql)==1)
										{
										$guia 		=  mysql_result($ssql,0,"id");
										$user		=  mysql_result($ssql,0,"usuario");
										$tracking 	=  mysql_result($ssql,0,"tracking");
										$estatus 	=  mysql_result($ssql,0,"estatus");
										$des	 	=  mysql_result($ssql,0,"des");
										mysql_close($conexion);																																	
										
										}else
										{
										echo "el numero de guia no existe";	
										}										
										         
									   }                
									  ?> 
                  
                  
                  			
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <?php
                                 if (isset($_POST['modificar']))
								 {
									$guia2	 	= $_POST["guia2"];									
									$tracking2	= $_POST['tracking'];
									$estatus2 	= $_POST['estatus'];
									$des2		= $_POST['des'];
									
									
									
									
									require ("cnx.php");
									
									$consulta = "UPDATE guias SET 
									tracking ='$tracking2', estatus ='$estatus2', des ='$des2' WHERE id = $guia2" ;
							
									$hacerconsulta = mysql_query ($consulta);
								
									mysql_close ($conexion);	
									
									echo "<br>";
									echo "<br>";
									?>
                                    
                                                  <table width="348" border="0" align="center">
                              <tr>
                                <td width="320" align="center"><p><strong>SUS CAMBIOS FUERON REALIZADOS CON EXITO</strong></p>
                                <p><a href="clientes.php">Click Aqui para volver al Area de Clientes</a></p></td>
                              </tr>
                            </table>

									<?php
									 }
									else
									{
					
                                 	?>
                                    
                                    
                   <br /><br />
                   

				  
                   
<form method="post" action="#">
                             <table width="340" border="0" align="center">
                                  <tr>
                                    <td width="142">Usuario:</td>
                                    <td width="46" align="left"><input name="usuario" type="text" id="usuario" value="<?php echo $user ?> " size="2" readonly="readonly" /></td>
                               </tr>
                                  <tr>
                                    <td>Nº de Tracking:</td>
                                    <td align="left"><input name="tracking" type="text" id="tracking" value="<?php echo $tracking ?> " /></td>
                                  </tr>
                                  <tr>
                                    <td>Estatus:</td>
                                    <td align="left"><input name="estatus" type="text" id="estatus" value="<?php echo $estatus ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Descripcion:</td>
                                    <td><textarea name="des" id="des" cols="30" rows="5"><?php echo $des ?></textarea>
                                   	  <input type="hidden" name="guia2" value="<?php echo $id ?>"/>
                                    </td>
                                  </tr>
                  </table>
                  <br />
                  <table width="200" border="0" align="center">
                    <tr>
                      <td><input type="submit" name="modificar" id="modificar" value="Guardar Cambios" /></td>
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