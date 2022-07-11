<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Contacto</title>
    <link href="../css/index.css" rel="stylesheet" type="text/css">

    <style>
        table,
        th,
        td {
            border: 1px solid white;
            padding: 4px;
        }
    </style>
</head>

<body>


    <div class="fondo">


    </div>

    <h3 style="border:double;" style="color:white;" class="titulo3"><a href="index.html"> Inicio</a> |<a
            href="contacto.html"> Contacto </a> | <a href="oferta.html"> Oferta </a></h3>



    <!--<h2 class="titulo2">  
        
        Cubre el formulario <br>
    </h2>
 
    <h3 class="titulo 5"></h3>
        <table style="width: 70%">
            <tr>
                <th> Tu nombre</th>
                <td>
                    <input type="text" value="" id="nombre" name="nombre" size="60">
                </td>
            </tr>
            <tr>
                <td>Tu edad</td>
                <td>
                    <input type="text" value="" id="nombre" name="nombre" size="60">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" value="" id="nombre" name="nombre" size="60">
                </td>
            </tr>
            <tr>
                <td rowspan="2"> <input type="submit" value="Enviar" size="60">
                </td>
            </tr>
        </table>
    -->

    <h1 class="centrado">Cubre el formulario</h1>

    <li id="datosusuario">datos usuario</li>
<!-- Si está el nombre cubierto -->
<!--abrimos php--> <?php if (isset($_POST['nombre'])){//cerramos php//?>
<!--HTML-->
<button onclick="javascript:history.back();">Volver</button>
<ul>

    <li> Nombre: <b><?php echo $_POST['nombre'];?><br></li>
    <li> Edad: <b><?php echo $_POST['edad'];?><br></li>
    <li> Email: <b><?php echo $_POST['email'];?><br></li>
    <li> Teléfono: <b><?php echo $_POST['tel'];?><br></li>
    <li> Ganas: <b><?php echo $_POST['cuantoganas'];?><br></li>
    <li> Gastas: <b><?php echo $_POST['cuantogastas'];?><br>
    <ul>

    <li>Te queda: <b><?php echo $_POST['cuantoganas'] - $_POST['cuantogastas'];?>

    </ul>
    </li>
    
    
</ul>

<?php // else si no está el nombre cubierto//
} else {?>

<!-- HTML mostramos el formulario action "index.php"-->

<form target="_self" name="form" id="form" action="index.php" method="post">
        <ul>

            <li>
                <label for="nombre"><span class="required">*</span>Tu nombre</label><br>
                <input type="text" name="nombre" required>

            </li>
            <li>
                <label for="edad">Tu edad</label><br>
                <input type="number" name="edad">

            </li>
          
            <li>
                <label for="email"><span class="required">*</span> Email</label><br>
                <input type="email" name="email" required>

            </li>
            <li>
                Teléfono <br>(formato xxx yyy zzz):<br>
                <input type="tel" name="tel">
            </li>
            <li>

                <span class="required">*</span> ¿Cómo vendrás al centro?
                <hr>
                <input type="radio" id="vehiculo" name="comoviene" value="vehiculo" required>
                <label for="vehiculo">Tengo vehículo</label><br>
                <input type="radio" id="andando" name="comoviene" value="andando">
                <label for="andando">Voy andando</label>
            </li>
            <li>
                ¿ Qué vehículos tienes ?<br>
                <input type="checkbox" id="coche" name="tipo" value="coche">
                <label for="coche">Tengo coche</label><br>
                <input type="checkbox" id="moto" name="moto" value="moto">
                <label for="moto">Tengo moto </label><br>
                <input type="checkbox" id="barco" name="barco" value="barco">
                <label for="barco">Tengo barco</label>
            </li>
            <li>
                ¿Qué curso quieres?
                <label for="curso">Elige uno</label>

                <select name="curso" id="curso">
                    <option value="">Elige uno...</option>
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="JS">JAVASCRIPT</option>
                </select>
            </li>

            <li>
                <label for="cuantoganas">Cuanto ganas?</label><br>
                <input type="number" name="cuantoganas">

            </li>
            <li>
                <label for="cuantogastas">Cuanto gastas?</label><br>
                <input type="number" name="cuantogastas">

            </li>
            <li>

                <input type="submit" name="Enviar">

            </li>
        </ul>
    </form>

<?php }?> 

</body>
</html>