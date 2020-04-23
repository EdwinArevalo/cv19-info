<?php 
include('db.php');


$search = $_POST['search'];

if(!empty($search)){
    $query = "SELECT * FROM articulos WHERE nombre LIKE '$search%' ";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        die('Query Error'.mysql_error($conn));
    }

    $json = array();

    while($row = mysqli_fetch_array($resultado)){
        $json[] = array(
            'nombre' => $row['nombre'],
            'precio' => $row['precio'],
            'stock' => $row['stock'],
            'id' => $row['id']
        );
        
    }
    $json_string = json_encode($json);
    echo $json_string;

}


?>