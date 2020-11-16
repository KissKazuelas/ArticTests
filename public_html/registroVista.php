<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Inicio-ArticDevco</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/cssRegistros.css" type="text/css">
    <script src="https://kit.fontawesome.com/66b3831846.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
    require "nav.php";
?>

<section id="registro">
    <form action="registroLogica.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Direccion de email</label>
            <input type="email" name="emailLg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese email" required>
            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tus datos personales</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" name="passLg" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" required>
        </div>
        <div class="form-group">
            <label for="nombreId">Nombre</label>
            <input type="text" name="nombLg" class="form-control" id="nombreId" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label for="nombreUsId">Nombre de Usuario</label>
            <input type="text" name="userLg" class="form-control" id="nombreUsId" placeholder="Nombre de usuario" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
</section>


<footer>
    <img src="public_html/img/LogoPrincipal.png" alt="">
    <div id="verif">
        <h2>Verifica certificado</h2>
        <button type="button" class="btn btn-success">Verificar</button>
    </div>
    <div id="redes">
        <h2>Siguenos en redes sociales</h2>
        <i class="fab fa-instagram fa-3x"></i>
    </div>
    <div id="mapa">
        <h2>Visítanos</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3702.4353163704777!2d-102.29597958505275!3d21.87930658554382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee7b76468f7b%3A0xc8c02c8b0f572fee!2sDr%20Jes%C3%BAs%20D%C3%ADaz%20de%20Le%C3%B3n%20210%2C%20Zona%20Centro%2C%2020000%20Aguascalientes%2C%20Ags.!5e0!3m2!1ses-419!2smx!4v1605392225262!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

</footer>
</body>
</html>