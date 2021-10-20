<?php

include_once('conexion.php');

$query = "SELECT * FROM registro";

$ejecutar = mysqli_query($conexion, $query);