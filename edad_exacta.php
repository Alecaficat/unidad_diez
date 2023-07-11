<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='shorcut icon' href="img/icono.jpeg">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Edad Exacta</title>
</head>
<body>
    <a href="index.html#section-respuestas">
        <img class="home" src="img/icono.jpeg" alt="corazon">
    </a>
    
    <div class="main-frame-cal">
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Por favor seleccione su fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" class="form-control" id="exampleFormControlInput1">
        </div>
        
        <button type="submit" name="verificar" class="btn btn-outline-info">Envíar</button>
    </form>

    <?php

    
    if (isset($_POST['verificar'])) {
        $fecha = new DateTime($_POST['fecha_nacimiento']);
       
        $date2 = new DateTime(date("y-m-d"));

        $fecha_diferencial= $fecha->diff($date2);

        $edad_actual = $fecha_diferencial->y;
        $edad_meses = $fecha_diferencial->m;
        $edad_dias = $fecha_diferencial->d;

        echo "Usted tiene los siguientes años: ".$edad_actual." <br> Usted tiene los siguientes meses: ".$edad_meses." <br>Usted tiene los siguientesdias: ".$edad_dias;

    }

    ?>

    </div>
</body>
</html>