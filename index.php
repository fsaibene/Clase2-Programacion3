<html>
<head>
	<title></title>
</head>
<body>
	Fernando Saibene
	<?php

require_once "alumno.php";
//require "mascota.php";
	echo "<h1>Hola Mundo</h1>";
	$nombre="Fernando";
	echo $nombre;
	//echo "<h1>$nombre</h1>";
	//echo "<h1>".$nombre."</h1>";
	//echo '<h1>$nombre</h1>';

	$numero=17;
	if($numero < 18)
		printf("Es menor de edad");
	else
		printf("Es mayor de edad");

	$arrayNuevo= array(1,2,3,5);
	$arrayNuevo[]=66;
	$arrayNuevo[2]=666;

	foreach ($arrayNuevo as $num)
	 {
		echo "<br>".$num;
		# code...
	}
	$arrayProducto = array("Pizza"=>20,"Cerveza"=>30,"Faina"=>10);
	echo $arrayProducto["Pizza"];
	echo "<br>";
	$arrayNuevo[2]="Apellido = Saibene";
	echo "<br>";
	var_dump($arrayProducto);
echo "<br>";
	$miObjeto= new stdclass();
	$miObjeto->nombre="Fer";
	$miObjeto->producto=$arrayProducto;

	var_dump($miObjeto);

	$arrayObjetos= array();
	$arrayObjetos["nombre"]="Fernandito";
	$arrayObjetos["producto"]=$arrayProducto;

	echo "<br>";
	var_dump($arrayObjetos);
	echo "<br>";
	var_dump($arrayProducto);

	

	$nuevoAlumno= new alumno();
	//$nuevoAlumno->Mostrar();
	alumno::MostrarAlumno($nuevoAlumno);
	

	?>
</body>
</html>