<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibe formulario</title>
</head>
<body>
    <h1>Recibe formulario</h1>
    <?php var_dump($_POST); 
    
    $usuario = $_POST['nombre'];

    if (!empty($usuario)) {
        echo $usuario;
    } else {
        $usuario = "desconocido";
    }

    $educacion = $_POST['educacion'];
    
    for ($i=0; $i < count($educacion); $i++) {
        echo "<p>Quiero estudiar: ". $educacion[$i] . "<br></p>";
    }

    $idiomas = $_POST['idiomas'];

    for ($i = 0; $i < count($idiomas); $i++) {
        echo "<p>Hablo: " . $idiomas[$i] . "<br></p>";
    }
    ?>
    <p>Hola <strong><?php echo $usuario; ?></strong>, gracias por visitarnos</p>


    
</body>
</html>