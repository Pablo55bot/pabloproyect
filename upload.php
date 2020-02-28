<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Insert title here</title>
	</head>
	<body>
	
	
	<?php 
	
	 require_once 'upload_library.php'; //carga la upload library
	 $subidas = []; //lista para recordar los fichero subidos
	 
	 try { //intentara subir todos los ficheros
	     foreach($_FILES as $f){
	         $ruta = 'imagenes2/'.$f['name'];
	         upload_file($f, $ruta, 1240000, 'image/*');
	         $subidas[]=$ruta;
	         echo "<p>Fichero ".$f['name']."subido correctamente.</p>";
	         
	     }
	     
	     echo "<p>Fichero".$f['name']."subido correctamente.</p>";
	     
	 }catch(Exception $e){ //si falla alguno...
	     echo '<p>Error: '.$e->getMassage().'</p>';
	     
	     foreach ($subidas as $fichero){
	         unlink($fichero);
	         echo "<p>Fichero $fichero eliminado correctamente.</p>";
	         
	     }
	     
	     echo '<p>Se borraron los ficheros ya subidos.</p>';
	     
	     }
	     
            
	?>
	
	</body>
</html>