<?php

include_once('conexion.php');

$query = "SELECT * FROM registro";

$ejecutar = mysqli_query($conexion, $query);

$filas = mysqli_fetch_all($ejecutar);
$estado;
if (isset($_GET["estado"]) && isset($_GET["idReclamo"])) {
    $idReclamo = $_GET["idReclamo"];
    $estado = $_GET["estado"];
    $updateState = "UPDATE registro SET estado='$estado' WHERE id_Registro=$idReclamo";
    mysqli_query($conexion, $updateState);
}
