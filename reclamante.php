<?php include_once('./php/getReclamo.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Estado de la Solicitud</title>
</head>

<body>

    <div class="container">
        <h1>Lista de Reclamos</h1>
        <ol class="list-group list-group-numbered">
            <?php
            foreach ($filas as $value) {
                echo "<li class='list-group-item d-flex justify-content-between align-items-start'>";
                echo "<div class='ms-2 me-auto'>";
                echo "<div class='fw-bold'>" . "Nombre: " . $value[1] . " Correo: " . $value[4] . "</div>";
                echo $value[5];
                echo "</div>";
                echo "<form class='d-flex justify-content-between' method='GET'>";
                echo "<select class='form-select w-100' aria-label='Default select example' name='estado'>";
                echo "<option selected>Estado</option>";
                echo "<option value='0'>En espera</option>";
                echo "<option value='1'>Revisado</option>";
                echo "</select>";
                echo "<input type='hidden' name='idReclamo' value='$value[7]' />";
                echo "<button type='submit' class='btn btn-primary ms-2'>Guardar</button>";
                echo "</form>";
                echo "</li>";
            }
            ?>
        </ol>

    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>