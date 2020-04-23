<?php 

    include("db.php");


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM articulos WHERE id = '$id' ";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("Falla de consulta");
        }
    }

    $_SESSION['message'] = 'Articulo elimiado satisfactoriamente';
    $_SESSION['message_type'] = 'danger';
    header("Location: inicio.php")

?>