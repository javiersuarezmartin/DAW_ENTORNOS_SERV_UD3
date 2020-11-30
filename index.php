<?php

    // Comprobamos que se ha enviado el formulario.
    if ($_POST) {    
        // Variable para almacenar el nombre del famoso.
        $nombre_famoso = ltrim($_POST['nombre']);
        // Variable para almacernar la edad del famoso.
        $edad_famoso = $_POST['edad'];
        //Variable para almacenar si el famoso está vivo o muerto.
        $estado_vida_famoso = $_POST['estado'];

        // Código básico para generar la página resultante con estilos css.
        echo "<html>";
        echo "<head>";
        echo "<link rel='stylesheet' href='styles.css' type='text/css'/>";
        echo "<title>Variables Famoso PHP</title>";
        echo "</head>";
        echo "<div class='cuerpo-formulario'>";
        
        // Imprimimos por pantalla un titulo para los datos
        echo "<h1 class='titulo'>DATOS DE FAMOSO</h1>";

        // Imprimimos por pantalla el nombre del famoso
        echo "<p>{$nombre_famoso}.</p>";

        // Antes de indicar la edad comprobamos si está vivo o muerto
        if ($estado_vida_famoso == "muerto") {

            // Si ha fallecido no puede tener edad por tanto lo imprimimos
            echo "<p>El famoso ha fallecido por tanto no puede tener edad.<p>";
        } else {

            // En caso de que esté vivo imprimimos por pantalla la edad
            echo "<p>Tiene {$edad_famoso} años</p>";
        };
    
        // Imprimimos por pantalla si está vivo o muerto.
        echo "<p>Actualmente est&aacute {$estado_vida_famoso}.</p>";

    } else {
        // Si no se ha enviado el fomulario mostramos un mensaje de error
        echo "<p>No se han recibido datos desde el formulario.<p>";
    };

    echo "</div>";
?>