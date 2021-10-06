<?php 
/*
    echo '<pre>';
    var_dump($producto);
    echo '</pre>';
*/
//muestra multiples productos, cantidad de productos como parametros
function obtenerProductos($cantidad = 10){
    include 'conexion.php';
    try {
        $sql = "SELECT * FROM productos LIMIT $cantidad";
        $resultado = $bd->query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
        return array();
    }
    return $resultado;
}

function obtenerProducto($id){
    include 'conexion.php';
    try {
        $sql = "SELECT nombre, imagen_completa, precio, descripcion, descripcion_corta FROM productos WHERE id = $id";
        $resultado = $bd->query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
        return array();
    }
    return $resultado;
}
