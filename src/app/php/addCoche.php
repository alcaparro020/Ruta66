<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, XRequested-With, Content-Type, Accept');

$json = file_get_contents('php://input');
$params = json_decode($json);

include("index.php");
$con = retornarConecction();
//echo $con;
$query = "INSERT INTO `Coches` (`Dni_Propietario`, `Matricula`, `Marca`, `Modelo`, `Color`, `Modificado`, `Homologado`) 
                VALUES ('$params->Dni_Propietario','$params->Matricula','$params->Marca','$params->Modelo','$params->Color','$params->Modificado','$params->Homologado')";
mysqli_query($con, $query);
