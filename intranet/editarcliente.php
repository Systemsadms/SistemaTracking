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
                    <div id="titulo">Sistema Tracking y Control de Usuarios v2.0</div>
                
                
                </div><!--FIN DE modulotop-->
                
                
                <div id="menu">
                
                 <div class="AJXMenuWJcNLQA"><!-- AJXFILE:menu/ajxmenu.css -->
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
                  
                  <br />
                 
                 
                 
<?php                 
    if (isset($_POST["guardar"]))
	{
			$id 		=	$_POST['cas'];
			$nick		= 	$_POST['nick'];
			$pass		= 	$_POST['pass'];
			$nombres	= 	$_POST['nombres'];
			$apellidos	= 	$_POST['apellidos'];
			$cedula		= 	$_POST['ci'];
			$email		=	$_POST['email'];
			$pais		=	$_POST['pais'];
			$estado		=	$_POST['estado'];
			$ciudad		=	$_POST['ciudad'];
			$telefono	=	$_POST['telefono'];
			$celular	=	$_POST['celular'];
			$dir		=	$_POST['dir'];
			
					
	

require ("cnx.php");				
$consulta = "UPDATE usuarios SET 
nick ='$nick', pass ='$pass', nombres ='$nombres', apellidos ='$apellidos', ci ='$cedula', email ='$email', pais='$pais', estado='$estado', ciudad='$ciudad', telefono='$telefono', celular='$celular', dir='$dir' WHERE id=$id" ;
			
			$hacerconsulta = mysql_query ($consulta);
			
				
			mysql_close ($conexion);			
			?>
            <br />
            <font size="+2">Sus cambios han sido realizados satisfactoriamente..</font>
            <br /><br />
            <font size="+2"><a href="clientes.php">...Velver a Clintes</a></font>
            <br />
            <br />
            
            
            <?php
			
			
	}
	else
	
	{
	$id = $_POST['id'];
	

	$ssql = mysql_query("SELECT * FROM usuarios WHERE id='$id'");

	$cas	 	=  mysql_result($ssql,0,"id");
	$nick 		=  mysql_result($ssql,0,"nick");
	$pass	 	=  mysql_result($ssql,0,"pass");
	$nombres 	=  mysql_result($ssql,0,"nombres");
	$apellidos 	=  mysql_result($ssql,0,"apellidos");
	$ci 		=  mysql_result($ssql,0,"ci");
	$email 		=  mysql_result($ssql,0,"email");
	$pais 		=  mysql_result($ssql,0,"pais");
	$estado 	=  mysql_result($ssql,0,"estado");
	$ciudad 	=  mysql_result($ssql,0,"ciudad");
	$telefono 	=  mysql_result($ssql,0,"telefono");
	$celular 	=  mysql_result($ssql,0,"celular");
	$dir 		=  mysql_result($ssql,0,"dir");
	
	mysql_close($conexion);	
	?>
                 
                 
                 
                 
                 
                                
                                 
               	  <form method="post" action="#">
            
			<table width="200" border="0" align="center">
                  
                      <tr>
                        <td width="82" align="left"><b>Cas:</b></td>
                        <td width="102" align="left"><span id="sprytextfield1">
                        <label for="cas"></label>
                          <input name="cas" type="text" id="cas" value="<?php echo $id ?>" readonly="readonly" />
                        </td>
                      </tr>
                      <tr>
                        <td align="left"><b>Nick:</b></td>
                        <td align="left"><span id="sprytextfield2">
                          <label for="nick"></label>
                          <input name="nick" type="text" id="nick" value="<?php echo $nick ?>" />
                        </td>
                      </tr>
                      <tr>
                      <tr>
                        <td align="left"><b>Clave:</b></td>
                        <td align="left"><span id="sprytextfield3">
                          <label for="pass"></label>
                          <input name="pass" type="text" id="pass" value="<?php echo $pass ?>" />
                       </td>
                      </tr>
                        <td align="left"><b>Nombres:</b></td>
                        <td align="left"><span id="sprytextfield4">
                          <label for="nombres"></label>
                          <input name="nombres" type="text" id="nombres" value="<?php echo $nombres ?>" />
                          </td>
                      </tr>
                      <tr>
                        <td align="left"><b>Apellidos:</b></td>
                        <td align="left"><span id="sprytextfield5">
                        <label for="apellidos"></label>
                          <input name="apellidos" type="text" id="apellidos" value="<?php echo $apellidos ?>" />
                       </td>
                      </tr>
                      <tr>
                      
                        <td align="left"><b>Cedula:</b></td>
                        <td align="left"><span id="sprytextfield6">
                          <label for="ci"></label>
                          <input name="ci" type="text" id="ci" value="<?php echo $ci ?>" />
                        </td>
                       
                      </tr>
                      <tr>
                        <td align="left"><b>E-mail:</b></td>
                        <td align="left"><span id="sprytextfield7">
                          <label for="email"></label>
                          <input name="email" type="text" id="email" value="<?php echo $email ?>" />
                        </td>
                      </tr>
                      <tr>
                        <td align="left"><b>Pais:</b></td>
                        <td align="left"><span id="sprytextfield8">
                          <label for="pais"></label>
                          <input name="pais" type="text" id="pais" value="<?php echo $pais ?>" />
                        </td>
                      </tr>
                      <tr>
                        <td align="left"><b>Estado:</b></td>
                        <td align="left"><span id="sprytextfield9">
                          <label for="estado"></label>
                          <input name="estado" type="text" id="estado" value="<?php echo $estado ?>" />
                        </td>
                      </tr>
                      <tr>
                        <td align="left"><b>Ciudad:</b></td>
                        <td align="left"><span id="sprytextfield10">
                          <label for="ciudad"></label>
                          <input name="ciudad" type="text" id="ciudad" value="<?php echo $ciudad ?>" />
                        </td>
                      </tr>
                      <tr>
                        <td align="left"><b>Telfono:</b></td>
                        <td align="left"><span id="sprytextfield11">
                          <label for="telefono"></label>
                          <input name="telefono" type="text" id="telefono" value="<?php echo $telefono ?>" />
                       </td>
                      </tr>
                      <tr>
                        <td align="left"><b>Celular:</b></td>
                        <td align="left"><span id="sprytextfield12">
                          <label for="celular"></label>
                          <input name="celular" type="text" id="celular" value="<?php echo $celular ?>" />
                        </td>
                      </tr>
                      <tr>
                        <td align="left"><b>Direccion:</b></td>
                        <td align="left"><span id="sprytextfield13">
                          <label for="dir"></label>
                          <input name="dir" type="text" id="dir" value="<?php echo $dir ?>" />
                        </td>
                      </tr>
                    </table>
			<br />
			<table width="200" border="0" align="center">
			  <tr>
			    <td><input type="submit" value="Guardar Cambios" name="guardar"/></td>
			    <td><input type="reset" value="Deshacer Cambios" /></td>
		      </tr>
			  </table>
            </form>             
                                
                                
 <br /><br /><br />
 
 
 <?php
	}//FIN DEL ELSE PARA MENSAJE DE GUARDADO
 ?>
 
                  
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