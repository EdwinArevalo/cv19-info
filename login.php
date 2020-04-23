<?php 
    include("db.php");
    

    if(isset($_POST['login'])){
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];

        $query = "SELECT * FROM usuarios where usuario = '$usuario' AND clave = '$clave' ";
        $result = mysqli_query($conn, $query);

        $count = mysqli_num_rows($result);
        if ($count == 1){
            
            header("Location: inicio.php");
        }else{
            $_SESSION['message'] = 'Credenciales incorrectas';
            $_SESSION['message_type'] = 'danger';
            header("Location: index.php");
        }

        $_SESSION['usuario'] = $_POST['usuario'];
            

    }


?>