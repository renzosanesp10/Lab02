<?php


include 'conexion.php';

$dni = $_POST['dni'];
$nombres = $_POST['nombres'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$reclamo = $_POST['reclamo'];

$query = "INSERT INTO registro(dni ,nombres, domicilio,  correo, telefono , reclamo) 
            VALUES ('$dni' , '$nombres' , ' $domicilio' , '$correo' , '$telefono' , '$reclamo')";


$ejecutar = mysqli_query($conexion, $query);



if ($ejecutar) {
    echo '
        <script>
            alert("Reclamo registrado exitosamente");
            window.location = "../index.php";
        </script>
';
} else {
    echo '
        <script>
            alert("Intentalo de nuevo, reclamo no almacenado");
            window.location = "../index.php";
        </script>
';
}

mysqli_close($conexion);
