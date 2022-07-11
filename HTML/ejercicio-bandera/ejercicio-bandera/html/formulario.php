<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Oferta</title>
    <link href="../css/index.css" rel="stylesheet" type="text/css">
</head>

<body>


    <div class="pizza fondo">


    </div>

    <h3 style="border:double;" style="color:white;" class="titulo3"><a href="index.html"> Inicio</a> |
        <a href="contacto.html"> Contacto </a> | <a href="oferta.html"> Oferta </a>
    </h3>


    <?php
    echo "<br><br><br><hr><h1>Hola mundo</h1>";
    // echo json_encode($_SERVER);//   // http://localhost/CURSO-IFCD0110/HTML/ejercicio-bandera//

    $metodo = $_SERVER['REQUEST_METHOD'];

    if ($metodo == "GET") {
        echo "<h2>Estos datos se han enviado por GET<br>";

        echo "Tu nombre es: ".$_GET['nombre']. "<br>";
        echo "Tu edad es: ".$_GET['edad']. "<br>";
        echo "Tu email es: ".$_GET['email']."<br>";
        echo "Tu teléfono es: ".$_GET['tel']."<br>";
        
    exit;
    }

    if ($metodo == "POST") {
        echo "<h2>Estos datos se han enviado por POST<br>";
        echo "Tu nombre es: ".$_POST['nombre']."</h2>";
    exit;
    }
    echo "<h2>Me has llamado por el método" . $_SERVER['REQUEST_METHOD'] . "</h2>";
    exit;

    ?>

</body>

</html>