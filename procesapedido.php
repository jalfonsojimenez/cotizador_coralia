<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Cotización</title>
<style>

body{
		font-family: helvetica neue;
		font-weight: light;		
		margin: 0 10% 0 10%;
}
.wrap{
		display:grid;
		grid-template-columns: repeat()		
}
</style>
</head>
<body>

<center><img src="coralialogo.jpeg" alt="" width="300px"></center>
<h1>Cotización</h1>
<h2>Descripción del servicio</h2>
<p>
		Agradecemos su confianza. En Coralia contamos con músicos experimentados y cantantantes de primer nivel que asegurarán
		la calidad que usted está buscando para su evento. <br>
		A continuación le presentamos nuestra propuesta. 
</p>

<?php	

		$cantidadmusicos= 0;
		$arraymusicos = array();

		foreach($_POST as $key => $value) {
				if(strpos($key, 'cos')=== 0){ // si la variable empieza con cos entonces guardar para calcular costo
								
						$preciomusico = $_POST['cospreciomusico'];
						$cantidadcarros = $_POST['coscant'];		
						$kilometros = $_POST['coskm'];
						$gas = $_POST['cosgas'];
						$comision = $_POST['coscomision'];
				}
				else{ //si la variable no empieza con cos entonces contabilizar los instrumentos o voces
						if(empty($value)){
						}
						else{ 
						$cantidadmusicos +=  $value; //aumentar el conteo
						echo "$key $value <br>";
						$a = array($key => $value);
						array_push($arraymusicos, $a);
						}								
				}
		}
		echo "<br> <h3>Total $cantidadmusicos elementos </h3> <br>";
		$costomusicos = $preciomusico * $cantidadmusicos;
						
		$viaticos = ((($kilometros*2) / 10)*$gas)*$cantidadcarros;
		//echo "el costo de viátcos es de $viaticos <br>";
		//echo "el costo de los músicos es $ $costomusicos <br>";
		//$costocomision = ($comision/100)*$costomusicos;
		$costocomision = $comision;
		$costototal = $costomusicos + $costocomision + $viaticos;
		$lugar = $_POST['lugar']; 

		echo "
		<h2>Total</h2>
				<p>El Precio de la misa en $lugar es de $ $costototal,
				</p>

		";
		if($viaticos>0){
				echo'
						incluye los viáticos del viaje por realizar.
				';				
		}
		//Hacer array con los datos para escribirlos en un json externo
		$info = array("lugar misa" => $lugar , 
				"preciomusico" => $preciomusico, 
				"comision" => $costocomision, 
				"carros" => $cantidadcarros,
				"kilometros" => $kilometros,
				"musicos" => $arraymusicos,
				"costo gasolina" => $gas);
/*		$fp = fopen('cotizaciones.json', 'w');
//		fwrite($fp, json_encode($info,  JSON_PRETTY_PRINT));
		fwrite($fp, json_encode($info, JSON_PRETTY_PRINT, FILE_APPEND));
		fclose($fp);
		error_reporting(E_ALL);
		i*/
		$file = file_get_contents('cotizaciones.json');
		$temp = json_decode($file);
		array_push($temp, $info);
		$finalarray = json_encode($temp, JSON_PRETTY_PRINT);

		file_put_contents('cotizaciones.json', $finalarray);


?>
</body>
</html>
