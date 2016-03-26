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
                  
                   <br />
                   
                    <form method="post" action="#">
   <table width="300" border="0" align="center">
     <tr>
       <td width="128" align="center"><input type="submit" name="agregar" id="agregar" value="Agregar Imagen" /></td>
       <td width="67">&nbsp;</td>
       <td width="128" align="center"><input type="submit" name="eliminar" id="eliminar" value="Eliminar Imagen" /></td>
     </tr>
   </table>
 </form>
 
 
 
 
 
 <br />
 <?php
 	if (isset($_POST['agregar']))
	{
?>
 <form method="post" action="#" enctype="multipart/form-data">
 <table width="420" border="0" align="center">
  <tr>
    <td width="119">Seleccionar Imagen:</td>
    <td width="65"><input type="file" name="foto" id="foto"/></td>
    <td width="65"><input type="submit" name="load" id="load" value="Cargar Nueva Imagen" /></td>
    </tr>
</table>
 </form>
 <?php		
	}
 ?>

 
 
 
 
<br />
 <?php
 	if (isset($_POST['eliminar']))
	{
?>
 <form method="post" action="#">
 <table width="236" border="0" align="center">
  <tr>
    <td width="134">Eliminar Imagen Nº</td>
    <td width="12"><input name="id" type="text" id="id" size="2" maxlength="3" /></td>
    <td width="74" align="center"><input type="submit" name="delete" id="delete" value="Eliminar" /></td>
    </tr>
</table>
 </form>
 
  <?php		
	}
 ?>
 
 
 
 
 
 
 <?php

if(isset($_POST['load'])){ 




####
## Funcin para redimencionar las imgenes
## utilizando las liberas de GD de PHP
####
 
function resizeImagen($ruta, $nombre, $alto, $ancho,$nombreN,$extension){
$rutaImagenOriginal = $ruta.$nombre;
if($extension == 'GIF' || $extension == 'gif'){
$img_original = imagecreatefromgif($rutaImagenOriginal);
}
if($extension == 'jpg' || $extension == 'JPG'){
$img_original = imagecreatefromjpeg($rutaImagenOriginal);
}
if($extension == 'png' || $extension == 'PNG'){
$img_original = imagecreatefrompng($rutaImagenOriginal);
}
$max_ancho = $ancho;
$max_alto = $alto;
list($ancho,$alto)=getimagesize($rutaImagenOriginal);
$x_ratio = $max_ancho / $ancho;
$y_ratio = $max_alto / $alto;
if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho
$ancho_final = $ancho;
$alto_final = $alto;
} elseif (($x_ratio * $alto) < $max_alto){
$alto_final = ceil($x_ratio * $alto);
$ancho_final = $max_ancho;
} else{
$ancho_final = ceil($y_ratio * $ancho);
$alto_final = $max_alto;
}
$tmp=imagecreatetruecolor($ancho_final,$alto_final);
imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
imagedestroy($img_original);
$calidad=70;
imagejpeg($tmp,$ruta.$nombreN,$calidad);
}

	$largo=2;
		$str = "abcdefghijklmnopqrstuvwxyz";
		$may = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$num = "1234567890";
		$cad = "";
		# Comienzo de la generacion de clave.
		$cad = substr($may ,rand(0,24),1);
		$cad .= substr($num ,rand(0,10),1);
		$cad .= substr($num ,rand(0,10),1);
		for($i=0; $i<$largo; $i++) {
		$cad .= substr($str,rand(0,24),1);
		}
		;





// comprobamos que se ha enviado el formulario
// comprobar que han seleccionado una foto
if($_FILES['foto']['name'] != ""){ // El campo foto contiene una imagen...
// Primero, hay que validar que se trata de un JPG/GIF/PNG
$allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "GIF", "PNG");
$extension = end(explode(".", $_FILES["foto"]["name"]));
if ((($_FILES["foto"]["type"] == "image/gif")
|| ($_FILES["foto"]["type"] == "image/jpeg")
|| ($_FILES["foto"]["type"] == "image/png")
|| ($_FILES["foto"]["type"] == "image/pjpeg"))
&& in_array($extension, $allowedExts)) {
// el archivo es un JPG/GIF/PNG, entonces...
$extension = end(explode('.', $_FILES['foto']['name']));
$foto = $cad . ".".$extension;
$directorio = "../galeria"; // directorio de tu eleccin
// almacenar imagen en el servidor
move_uploaded_file($_FILES['foto']['tmp_name'], $directorio.'/'.$foto);
$minFoto = 'guia_'.$foto;
$resFoto = 'res_'.$foto;
resizeImagen($directorio.'/', $foto, 800, 600,$minFoto,$extension);
//resizeImagen($directorio.'/', $foto, 500, 500,$resFoto,$extension);
unlink($directorio.'/'.$foto);

echo "Se ha cargado una nueva noticia a tu liga";
} else { // El archivo no es JPG/GIF/PNG
$malformato = $_FILES["foto"]["type"];
echo "El tipo de archivo no es una imagen valida";
//header("Location: index.php");
exit;
}
} else { // El campo foto NO contiene una imagen
		
		echo "Se ha cargado una nueva noticia sin imagen a tu liga ";
//echo "No contiene ninguna imagen";

//header("Location: index.php");
//exit;
}

		mysql_query ("INSERT INTO galeria VALUES 
		('', '$cad')");
		mysql_close ($conexion);
														
		
		header("location:galeria.php");
		
	} // fin del submit

	
?>
 <br /><br />
 
 
 
 
 
 
 
 <?php

	if(isset($_POST['delete']))
	{
		$id = $_POST['id'];
		
		
		$consulta = "DELETE FROM galeria WHERE id ='$id';";
		$hacerconsulta=mysql_query ($consulta,$conexion);
		mysql_close($conexion);
										
										
		echo "La Imagen fue eliminada con exito<br><br>";
		header("location:galeria.php");
									
										
	}
?>






<?php

	$consulta = "SELECT * FROM galeria;";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				
				echo "<table border='1' bordercolor='#FF0000' align='center'>";
				echo "<tr>";
				echo "<td align='center'><b>ID</b></td>";
				echo "<td bgcolor='#CCCCCC' align='center'><b>Foto</b></td>";
				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'><img src='../galeria/guia_".$reg[1].".jpg' width='75' height='75' /></td>";		
				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
		
		
		
			
?>
                   
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