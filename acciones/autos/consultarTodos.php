<?php

header('Content-Type: application/json');

require_once '../../modelo/auto.php';
require_once 'responses/consultarTodosResponse.php';
require_once '../../configuracion/database.php';


$resp = new ConsultarTodasResponse();
$resp->ListAutos = Auto::BuscarTodos();  

echo json_encode($resp);