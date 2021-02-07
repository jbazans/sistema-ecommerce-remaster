<?php
include('../_conexion.php');
$response=new stdClass();

function estado2texto($id){
	switch ($id) {
		case '1':
			return 'Por procesar';
			break;
		case '2':
			return 'Por pagar';
			break;
		case '3':
			return 'Por entregar';
			break;
		case '4':
			return 'En camino';
			break;			
		case '5':
			return 'Entregado';
			break;
		default:
			break;
	}
}

session_start();
$codusu=$_SESSION['codusu'];
$datos=[];
$i=0;
$sql="select ped.*,pro.*,ped.estado estadoped
from pedido ped
inner join producto pro
on ped.codpro=pro.codpro
where ped.codusu=$codusu and ped.estado!=2
 and ped.estado!=1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$obj=new stdClass();
	$obj->nompro=utf8_encode($row['nompro']);
	$obj->despro=utf8_encode($row['despro']);
	$obj->fecped=$row['fecped'];
	$obj->dirusuped=utf8_encode($row['dirusuped']);
	$obj->telusuped=utf8_encode($row['telusuped']);
	$obj->prepro=$row['prepro'];
	$obj->estado=$row['estadoped'];
	$obj->estadotxt=estado2texto($row['estadoped']);
	$obj->rutimapro=$row['rutimapro'];
	$datos[$i]=$obj;
	$i++;
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);
