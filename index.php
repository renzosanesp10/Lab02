<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Libro de Reclamaciones</title>
</head>

<body>

    <div class="contenedor-form">

        <h1>LIBRO DE RECLAMACIONES</h1>
        <form action="php/registro_reclamo.php" method="POST">

                <label for="full_name_id" class="control-label">Nombres Completos</label>
                <input type="text" class="form-control" id="nombres_completos" name="nombres" placeholder="Fabrizzio Lujan Garcia">

                <label for="street1_id" class="control-label">Documento de Identidad</label>
                <input type="text" class="form-control" id="documento_identidad" name="dni" placeholder="12345678">

                <label for="street2_id" class="control-label">Domicilio</label>
                <input type="text" class="form-control" id="street2_id" name="domicilio" placeholder="Santa Edelmira 425">

                <label for="city_id" class="control-label">Correo Electronico</label>
                <input type="email" class="form-control" id="city_id" name="correo" placeholder="fabri@gmail.com">

                <label for="city_id" class="control-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="999941021">

                <label for="floatingTextarea2">Reclamo</label>
                <textarea class="form-control" name="reclamo" cols="30" rows="10" placeholder="Escribe tu Reclamo Aqui"></textarea>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>




    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>