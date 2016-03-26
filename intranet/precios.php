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
			  if (isset($_POST['aereo']))
			  {
				?>
                
                
                
                <table width="200" border="0" align="center">
                  <tr>
                    <td><strong><em>Modificar Perecios Envios AEREOS</em></strong></td>
                  </tr>
                </table>
                <br />
                
				   <form action="#" method="post">
                <table width="500" border="0" align="center">
                  <tr>
                    <td><strong><em>Costo de libra</em></strong></td>
                    <td><input name="libra" type="text" id="libra" size="4" />
                      <em>$</em>.</td>
                    <td>&nbsp;</td>
                    <td><em><strong>Dollar NO oficial</strong></em></td>
                    <td><input name="dollara" type="text" id="dollara" size="4" />
                      <em>bsf.</em></td>
                    <td><input type="submit" name="publicara" id="publicara" value="Publicar Precios" /></td>
                  </tr>
                </table>
                </form>
                <br />
                
                
                <?php  
			  }
			  elseif (isset($_POST['maritimo']))
			  {
				  
			?>
                
                
                
                <table width="200" border="0" align="center">
                  <tr>
                    <td><strong><em>Modificar Perecios Envios MARITIMOS</em></strong></td>
                  </tr>
                </table>
                <br />
                
				   <form action="#" method="post">
                <table width="500" border="0" align="center">
                  <tr>
                    <td><strong><em>Costo de CutFt</em></strong></td>
                    <td><input name="cf" type="text" id="cf" size="4" />
                      <em>$</em>.</td>
                    <td>&nbsp;</td>
                    <td><em><strong>Dollar NO oficial</strong></em></td>
                    <td><input name="dollarm" type="text" id="dollarm" size="4" />
                      <em>bsf.</em></td>
                    <td><input type="submit" name="publicarm" id="publicarm" value="Publicar Precios" /></td>
                  </tr>
                </table>
                </form>
                <br />
                
                
                <?php  
			 }			  
			  ?>
			      
                   
                   
                   
                   
                   
                   
                   
                   
                   
				<?php                 
                   if (isset($_POST["publicara"]))
                   {
					   $tarifa		= "1";
                       $libra 		=	$_POST['libra'];
                       $dollara		= 	$_POST['dollara'];
                
                
						require ("cnx.php");				
						$consulta = "UPDATE precios SET 
libra ='$libra', daereo='$dollara' WHERE tarifa=$tarifa" ;                            
                        $hacerconsulta = mysql_query ($consulta);
                        mysql_close ($conexion);
						
						echo "<br>";
						echo "Se han actualizado los nuevos precios de envios aereos";
						echo "<br>";
                    }
					?>
					
					
					
					
					
					
					
					
					
					<?php
					
					 if (isset($_POST["publicarm"]))
                   {
					   $tarifa2		= "1";
                       $cf2 		=	$_POST['cf'];
                       $dollarm2	= 	$_POST['dollarm'];
                
                
						require ("cnx.php");				
						$consulta = "UPDATE precios SET 
cf='$cf2', dmaritimo='$dollarm2' WHERE tarifa=$tarifa2" ;                            
                        $hacerconsulta = mysql_query ($consulta);
                        mysql_close ($conexion);
						
						echo "<br>";
						echo "Se han actualizado los nuevos precios maritimos";
						echo "<br>";
                    }
                  ?>
                                   
                                   
                   
                   
                  <?php 
                  
                   $tarifa = "1";	
					 require ("cnx.php");
					$ssql = mysql_query("SELECT * FROM precios WHERE tarifa='$tarifa'");
				
					$daereo	 	=  mysql_result($ssql,0,"daereo");
					$libra 		=  mysql_result($ssql,0,"libra");
					$dmaritimo	 =  mysql_result($ssql,0,"dmaritimo");
					$cf 		=  mysql_result($ssql,0,"cf");

					
					mysql_close($conexion);	
				?>
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
             <table width="200" border="1" align="center">
              <tr>
                <td bgcolor="#999999"><strong>ENVIOS AEREOS</strong></td>
              </tr>
            </table>
            <br />

             <table width="400" border="0" align="center">
               <tr>
                 <td><strong><em>Costo de Libra </em></strong></td>
                 <td><em><strong>Dollar No Oficial</strong></em></td>
               </tr>
               <tr>
                 <td><?php echo $libra;?>$.</td>
                 <td><?php echo $daereo;?> Bsf.</td>
               </tr>
             </table>
             <br />
             <form method="post" action="#">
             <table width="200" border="0" align="center">
               <tr>
                 <td><input type="submit" name="aereo" id="aereo" value="Actualziar precios &quot;Envios Aereos&quot;" /></td>
               </tr>
             </table>
             </form>
             <br />
             <br />

             <table width="200" border="1" align="center">
               <tr>
                 <td bgcolor="#999999"><strong>ENVIOS MARITIMOS</strong></td>
               </tr>
             </table>
             <br />
             <table width="400" border="0" align="center">
               <tr>
                 <td><strong><em>Costo de CutFt</em></strong></td>
                 <td><em><strong>Dollar No Oficial</strong></em></td>
               </tr>
               <tr>
                 <td><?php echo $cf;?>$.</td>
                 <td><?php echo $dmaritimo;?>Bsf.</td>
               </tr>
             </table>
             <br />  
                  <br />
                  <form method="post" action="#">
                    <table width="200" border="0" align="center">
                      <tr>
                        <td><input type="submit" name="maritimo" id="maritimo" value="Actualziar precios &quot;Envios Maritimos&quot;" /></td>
                      </tr>
                    </table>
                  </form>
                  <br />
                  <br /><br />   
                   
                   
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