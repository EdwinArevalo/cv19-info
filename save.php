<?php

include('db.php');

if(isset($_POST['guardar_articulo'])){
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $query = "INSERT INTO articulo(nombre, precio, stock) VALUES('$nombre',$precio,$stock)";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Consulta inválida");
    }

    $_SESSION['message'] = 'Articulo agregado satisfactoriamente';
    $_SESSION['message_type'] = 'success';

    header("Location: inicio.php");
}
?>