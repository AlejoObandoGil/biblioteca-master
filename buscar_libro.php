<?php 

	include('conexion.php');

    $titulo = $_POST['titulo'];

    $consulta = "SELECT * FROM libros WHERE titulo = '$titulo'";

    $resultados = pg_query($conn,$consulta);

    while ($resultado = pg_fetch_array($resultados)){

        echo $resultado['codigo_libro']." ".$resultado['titulo']." ".$resultado['autor']." ".$resultado['fecha_publicacion']." ".$resultado['genero_literario']." ".$resultado['numero_paginas']." ".$resultado['editorial']." ".$resultado['issn']." ".$resultado['idioma']." ".$resultado['estado']." ".$resultado['precio']." ".$resultado['imagen_portada'];
    }

?>